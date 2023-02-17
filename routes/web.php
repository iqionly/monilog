<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/log-data', [DashboardController::class, 'log_datatable'])->name('dashboard.log-data');
Route::get('/log-user', [DashboardController::class, 'log_user'])->name('dashboard.log-user');
Route::get('/graph-2-data', [DashboardController::class, 'graph_2'])->name('dashboard.graph-2');
Route::get('/graph-3-data', [DashboardController::class, 'graph_access'])->name('dashboard.graph-3');

Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
// Route::middleware(['throttle:sync-employee'])->group(function(){
    Route::post('/sync-explicit', [SettingsController::class, 'sync'])->name('settings.sync');
    Route::post('/sync-employee', [SettingsController::class, 'sync_employee'])->name('settings.sync-employee');
    Route::get('/sync-user', [SettingsController::class, 'sync_user'])->name('settings.sync-user');
// });
Route::post('/update-settings', [SettingsController::class, 'update_settings'])->name('settings.update');
Route::get('/{user:user_id?}', [DashboardController::class, 'index'])->name('dashboard');