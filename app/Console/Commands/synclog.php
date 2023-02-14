<?php

namespace App\Console\Commands;

use App\Http\Controllers\SettingsController;
use App\Models\Setting;
use Illuminate\Console\Command;

class synclog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:synclog';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $settingsOption = Setting::first();
        
        if($settingsOption && ($settingsOption->enable_schedule_api == 'on' || ($settingsOption->enable_schedule_api_by == 'auto' && $settingsOption->enable_schedule_api == 'off'))) {
            $settings = new SettingsController();
            $settings->sync();
        }
    }
}
