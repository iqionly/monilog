<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use MongoDB\BSON\Regex;
use MongoDB\BSON\UTCDateTime;
use MongoDB\Model\BSONArray;

class DashboardController extends Controller
{
    private $dateWeekAgo;
    private $settings;

    public function __construct()
    {
        $this->settings = Setting::first();
        if((int) $this->settings->get_weeks == 0) {
            $this->dateWeekAgo = Carbon::parse(0)->format('Y-m-d');
        } else {
            $this->dateWeekAgo = Carbon::now()->subWeeks()->format('Y-m-d');
        }
    }

    public function index(User $user)
    {
        // dd($user->logs);
        // dd($user_id);
        $date = $this->dateWeekAgo;
        // dd($date);
        $logQuery = [
            // ['$match' => [ 'created_at' => ['$gte' => $date], 'url_access' => [ '$exists' => true, '$ne' => null, '$ne' => "" ] ]],
            // ['$group' => ['_id' => '$url_access', 'total' => ['$sum' => 1]]],
            // ['$sort' => ['total' => -1]],
            // ['$limit' => 5],
            ['$match' => [ 
                'created_at' => ['$gte' => new UTCDateTime(new DateTime($date))], 
                'url_access' => [ '$exists' => true, '$ne' => null, '$ne' => "" ] ]
            ]
        ];

        $log_user = [];

        if(!empty($user->user_id)) {
            $logQuery[0]['$match'] = [
                'user_id' => $user->user_id
            ];

            $log_user = Log::where('user_id', $user->user_id)->orderBy('created_at', 'desc')->get();
        }

        $logQuery = array_merge($logQuery, [
            ['$project' => ['url_access' => '$url_access', 'users_id' => '$user_id', 'date_access' => ['$substr' => ['$created_at', 0, 10]]]],
            ['$group' => ['_id' => ['url_access' => '$url_access', 'users' => '$users_id'], 'total' => ['$sum' => 1]]],
            ['$group' => ['_id' => '$_id.url_access', 'list_users' => ['$push' => ['users_id' => '$_id.users', 'count_user' => '$total']], 'total' => ['$sum' => '$total']]],
            ['$sort' => ['total' => -1]],
            ['$limit' => 5]
        ]);

        $url_access_chart = Log::raw(function($collection) use ($logQuery) {
            return $collection->aggregate($logQuery);
        });

        $users = User::all();

        return view('log', ['url_access_chart' => $url_access_chart, 'user' => $user, 'log_user' => $log_user, 'users' => $users]);
    }

    public function log_datatable(Request $request)
    {   
        $logs = Log::select('url_access', 'user_id', 'data', 'description', 'created_at', 'updated_at', 'log_mytalent_id')
            ->skip($request->start)
            ->take($request->length)
            ->when($keyword = $request->search['value'], function($noquery) use ($keyword) {
                $noquery->where('url_access', 'like', '%'.$keyword.'%');
                $noquery->orWhere('user_id', 'like', '%'.$keyword.'%');
                $noquery->orWhere('data', 'like', '%'.$keyword.'%');
                $noquery->orWhere('description', 'like', '%'.$keyword.'%');
                $noquery->orWhere('created_at', 'like', '%'.$keyword.'%');
                $noquery->orWhere('updated_at', 'like', '%'.$keyword.'%');
                $noquery->orWhere('log_mytalent_id', 'like', '%'.$keyword.'%');
            });
        
        $logs = $logs->get()
            ->map(function($data) {
                $data->user_el = '<a href="'.url('/'.$data->user_id).'">'.$data->user_id.'</a>';
                $data->data = '<code class="text-wrap">'.$data->data.'</code>';
                return $data;
            });
            
        $total_recods = Log::count();

        $filtered_records = Log::
        when($keyword = $request->search['value'], function($noquery) use ($keyword) {
            $noquery->where('url_access', 'like', '%'.$keyword.'%');
            $noquery->orWhere('user_id', 'like', '%'.$keyword.'%');
            $noquery->orWhere('data', 'like', '%'.$keyword.'%');
            $noquery->orWhere('description', 'like', '%'.$keyword.'%');
            $noquery->orWhere('created_at', 'like', '%'.$keyword.'%');
            $noquery->orWhere('updated_at', 'like', '%'.$keyword.'%');
            $noquery->orWhere('log_mytalent_id', 'like', '%'.$keyword.'%');
        })
        ->count();

        return [
            'data' => $logs,
            'draw' => $request->draw,
            'recordsFiltered' => $filtered_records,
            'recordsTotal' => $total_recods
        ];
    }

    public function graph_2(Request $request) {
        $url_access_graph = Log::raw(function($collection) use ($request) {
            $match = [
                'url_access' => ['$ne' => null],
                'url_access' => ['$ne' => ''],
                'url_access' => [
                    '$in' => [
                        $request->url_0,
                        $request->url_1
                    ]
                ],
            ];

            if($request->user != null) {
                $match['user_id'] = (int) $request->user;
            } else {
                $match['created_at'] = [ '$gte' => new UTCDateTime(new DateTime($this->dateWeekAgo))];
            }


            return $collection->aggregate([
                ['$match' => $match ],
                ['$addFields' => [
                    'created_at' => [
                        '$dateToParts' => [
                            'date' => '$created_at'
                        ]
                    ]]
                ],
                ['$group' => [
                    '_id' => [
                        'year' => '$created_at.year',
                        'month' => '$created_at.month',
                        'interval' => [
                            '$subtract' => ['$created_at.day', ['$mod' => ['$created_at.day', 1]]]
                        ], 
                        'url_access' => '$url_access'
                    ],
                    'count' => ['$sum' => 1]]
                ],
                ['$project' => ['_id' => 0, 'count' => 1, 'url_access' => '$_id.url_access',
                    'from' => ['$dateFromParts' => ['year' => '$_id.year', 'month' => '$_id.month', 'day' => '$_id.interval']],
                    'to' => ['$dateFromParts' => ['year' => '$_id.year', 'month' => '$_id.month', 'day' => ['$add' => ['$_id.interval', 10]]]]]
                ],
                ['$sort' => ['from' => -1, 'url_access' => -1, 'count' => -1]],
                ['$group' => ['_id' => '$url_access', 'statistics' => [
                    '$push' => ['count' => '$count', 'from' => ['$dateToString' => ['date' => '$from', 'format' => '%Y-%m-%d %H:%M:%S']]]]
                ]],
                ['$project' => ['_id' => 0, 'url_access' => '$_id', 'statistics' => ['$slice' => ['$statistics', 10]]]]
            ]);
        });

        $url_access_graph->map(function($data) {
            $data->statistics = new Collection(json_decode(json_encode($data->statistics, true)));
            return $data;
        });

        $data_1 = $url_access_graph[0]->statistics->pluck('count', 'from');
        $data_2 = $url_access_graph[0]->statistics->pluck('from');

        $data_3 = $url_access_graph[1]->statistics->pluck('count', 'from');
        $data_4 = $url_access_graph[1]->statistics->pluck('from');

        $dates = $data_2->merge($data_4, $data_2);

        // dd(date('Y-m-d H:i:s', strtotime($dates->first())), date('Y-m-d H:i:s', strtotime($dates->last())));
        $different = Carbon::parse($dates->last())->diffInDays($dates->first());
        for($day = date('Y-m-d H:i:s', strtotime($dates->first())); $day >= date('Y-m-d H:i:s', strtotime($dates->last())); $day = Carbon::parse($day)->subDays(1)->format('Y-m-d H:i:s')) {
            $data_1[$day] = isset($data_1[$day]) ? $data_1[$day] : 0;
            $data_3[$day] = isset($data_3[$day]) ? $data_3[$day] : 0;
        }

        foreach($dates = array_keys($data_1->sortKeys()->toArray()) as $key => $date) {
            $dates[$key] = substr($date, 0, 10);
        }

        $result_1 = [];
        $result_2 = [];
        
        $i = 0;
        foreach($data_1->sortKeys() as $item) {
            $result_1[$i] = $item;
            $i++;
        }
        $i = 0;
        foreach($data_3->sortKeys() as $item) {
            $result_2[$i] = $item;
            $i++;
        }
        
        if($data_1->count() != $data_3->count()) {
            if($data_1->count() > $data_3->count()) {
                array_pop($result_1);
            }   
            if($data_3->count() > $data_1->count()) {
                array_pop($result_2);
            } 
        }

        if($data_1->sum() > $data_3->sum()){
            return [ 'names' => ['url top 1', 'url top 2'], $result_1, $result_2, $dates];
        } else {
            return [ 'names' => ['url top 2', 'url top 1'], $result_1, $result_2, $dates];
        }

    }

    public function graph_access(Request $request) {
        $date = Carbon::now()->subWeeks(1)->format('Y-m-d');
        $query = [
            ['$match' => ['created_at' => ['$gte' => new UTCDateTime(new DateTime($date))]]], 
            ['$addFields' => ['created_at' => ['$dateToParts' => ['date' => '$created_at']]]], ['$group' => ['_id' => ['year' => '$created_at.year', 'month' => '$created_at.month', 'day' => '$created_at.day'], 'count' => ['$sum' => 1]]], ['$sort' => ['_id.year' => 1, '_id.month' => 1, '_id.day' => 1]]];
        if($request->user != null) {
            $query[0]['$match']['user_id'] = (int) $request->user;
        }
        $data = Log::raw(function($collection) use ($query) {
            return $collection->aggregate($query);
        });
        $graph_date = $data->pluck('_id')->map(function($row) {
            return $row->year . '-' . $row->month . '-' . $row->day;
        });
        $graph_data = $data->pluck('count');
        return response()->json(['dates' => $graph_date, 'datas' => $graph_data]);
    }
}
