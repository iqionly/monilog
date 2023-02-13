<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\HistoryLogSync;
use App\Models\Log;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use MongoDB\BSON\UTCDateTime as DateTimeBSON;

class SettingsController extends Controller
{
    private $urlApi = 'https://mytalent.ioh.co.id/api';
    private $limitation = 20000;

    public function index() {
        $settings = Setting::first();
        return view('settings.index', [ 'settings' => $settings ]);
    }

    public function sync(Request $request) {
        $validation = $request->validate([
            '_start_date' => 'required|date',
            '_end_date' => 'required|date|different:_start_date'
        ]);

        $settings = Setting::first();
        if(!$settings) {
            return response()->json(['message' => 'Account Not Setting Yet.']);
        }

        $last_date_data = '1970-01-01 00:00:00';
        if(Log::count('_id')) {
            $last_date_data = Log::latest()->value('created_at')->format('Y-m-d H:i:s');
        }
        
        HistoryLogSync::firstOrCreate([
            'params' => $last_date_data
        ], [
            'action' => 'sync log success from '. $last_date_data . ', with ' . $this->limitation,
            'ip address'    => $request->ip(),
            'url_access'    => $request->url(),
            'url_api'       => $settings->url_log
        ]);

        $response = response()->json(['message' => 'Cannot Request Same Data']);

        $token = $this->get_token($settings);

        $client = $this->getClient($token)->get($settings->url_log, [
                '_start_date' => $last_date_data,
                '_limit' => $this->limitation
            ]);

        $response = $client->collect()->map(function($item) {
            return [
                'log_mytalent_id'   => (int) $item['id'],
                'user_id'           => (int) $item['user_id'],
                'url_access'        => $item['url'],
                'data'              => $item['data'],
                'description'       => $item['desc'],
                'created_at'        => $this->date_bson($item['date_create']),
                'updated_at'        => $this->date_bson($item['date_update'])
            ];
        });

        Log::insert($response->toArray());

        $response = response()->json(['message' => 'Success Syncronize']);

        return $response;
    }

    public function update_settings(Request $request) {
        $validated = $request->validate([
            '_email' => 'required|email',
            '_password' => 'required',
            '_url_log' => 'required|url',
            '_url_emp' => 'required|url',
            '_url_usr' => 'required|url',
            '_url_api' => 'required|url',
        ]);

        $get_settings = Setting::firstOrNew();
        
        $get_settings->email = $request->_email;
        $get_settings->password = $request->_password;
        if($get_settings->url_api !== $request->_url_api) {
            Cache::put('new_url', $request->_url_api, now()->addMinutes(4));
        }
        $get_settings->url_api = $request->_url_api;

        $get_settings->token_api = $this->get_token($get_settings);
        $get_settings->enable_schedule_api = $request->_schedule_api_on;

        $get_settings->url_log = $request->_url_log;
        $get_settings->url_employee = $request->_url_emp;
        $get_settings->url_user = $request->_url_usr;

        $get_settings->save();

        return redirect()->back();
    }

    public function sync_employee(Request $request) {
        $settings = Setting::first();
        if(!$settings) {
            return response()->json(['message' => 'Account Not Setting Yet.']);
        }

        $checkHistory = HistoryLogSync::firstOrCreate([
            'params' => date('Y-m-d')
        ], [
            'action' => 'sync employee success',
            'ip address' => $request->ip(),
            'url_access' => $request->url(),
            'url_api' => $settings->url_employee
        ]);


        $token = $this->get_token($settings);

        $client = $this->getClient($token)->get($settings->url_employee);

        $response = $client->collect('data')->toArray();

        if(!empty($response)) {
            $delete = Employee::query()->delete();
            Employee::insert($response);
        }

        $response = response()->json(['message' => 'Success Syncronize']);

        return $response;
    }

    public function sync_user(Request $request) {
        $settings = Setting::first();
        if(!$settings) {
            return response()->json(['message' => 'Account Not Setting Yet.']);
        }

        $checkHistory = HistoryLogSync::firstOrCreate([
            'params' => date('Y-m-d')
        ], [
            'action' => 'sync user success',
            'ip address' => $request->ip(),
            'url_access' => $request->url(),
            'url_api' => $settings->url_user
        ]);

        $token = $this->get_token($settings);

        $client = $this->getClient($token)->get($settings->url_user);

        $response = array_values($client->collect('data')->map(function($item){
            return [
                'user_id' => (int) $item['id'],
                'nik' => $item['nik'],
                'email' => $item['email'],
                'full_name' => $item['full_name']
            ];
        })->toArray());

        if(!empty($response)) {
            $delete = User::query()->delete();
            User::insert($response);
        }

        $response = response()->json(['message' => 'Success Syncronize']);

        return $response;
    }

    public function get_token(Setting $settings)
    {
        if(Cache::has('token') && !Cache::has('new_url')) {
            return Cache::get('token');
        }

        $client = $this->getClient()->post(!empty($settings->url_api) ? $settings->url_api . '/login_token' : $this->urlApi . '/login_token', [
            'email' => $settings->email ?? 'rizky@kabayan.id',
            'password' => $settings->password ?? 'MyAPI2022'
        ]);

        $response = $client->object();
        $token = $response->token;
        Cache::put('token', $token, now()->addMinutes(4));
        Cache::forget('new_url');
        $settings->token_api = $token;
        $settings->save();

        return $token;
    }

    private function getClient($token = null) {
        if(env('APP_ENV') == 'production') {
            return Http::withHeaders(['user-agent' => 'My User agent'])
            ->retry(3, 500)
            ->withOptions(['proxy' => 'http://10.10.100.250:8080']);
        }
        if($token) {
            return Http::withOptions([
                'verify' => false
            ])
            ->withToken($token);
        }
        return Http::withOptions([
            'verify' => false
        ]);
    }

    private function date_bson($value) {
        return new DateTimeBSON((new DateTime($value))->getTimestamp()*1000);
    }
}
