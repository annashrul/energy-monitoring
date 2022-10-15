<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\ChartDailyController;

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

Route::get('/', function () {
    // return redirect('http://localhost/LCI/laravel/energy-monitoring/');
//    return File::get(public_path() . '/index.html');
   return view('welcome');
});

Route::post('/insert', [\App\Http\Controllers\ChartDailyController::class, 'insert'])->name('insert');
Route::get('/get_daily', [\App\Http\Controllers\ChartDailyController::class, 'get_daily'])->name('get_daily');
Route::get('/get_monthly', [\App\Http\Controllers\ChartDailyController::class, 'get_monthly'])->name('get_monthly');
Route::get('/get_yearly', [\App\Http\Controllers\ChartDailyController::class, 'get_yearly'])->name('get_yearly');

// Route::post('/insert', 'ChartDailyController@insert')->name('insert');
// Route::get('/get_daily', 'ChartDailyController@get_daily')->name('get_daily');
// Route::get('/get_monthly', 'ChartDailyController@get_monthly')->name('get_monthly');
// Route::get('/get_yearly', 'ChartDailyController@get_yearly')->name('get_yearly');