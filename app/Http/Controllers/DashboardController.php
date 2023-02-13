<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $dateWeekAgo;

    public function __construct()
    {
        $this->dateWeekAgo = Carbon::now()->subRealWeeks(10)->format('Y-m-d H:i:s');
    }

    public function index(User $user)
    {
        // dd($user->logs);
        // dd($user_id);
        $date = $this->dateWeekAgo;

        $logQuery = [
            // ['$match' => [ 'created_at' => ['$gte' => $date], 'url_access' => [ '$exists' => true, '$ne' => null, '$ne' => "" ] ]],
            // ['$group' => ['_id' => '$url_access', 'total' => ['$sum' => 1]]],
            // ['$sort' => ['total' => -1]],
            // ['$limit' => 5],
            ['$match' => [ 
                // 'created_at' => ['$gte' => $date], 
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
}
