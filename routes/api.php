<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/insert', [\App\Http\Controllers\ChartDailyController::class, 'insert']);
Route::get('/get_daily', [\App\Http\Controllers\ChartDailyController::class, 'get_daily']);
Route::get('/get_monthly', [\App\Http\Controllers\ChartDailyController::class, 'get_monthly']);
Route::get('/get_yearly', [\App\Http\Controllers\ChartDailyController::class, 'get_yearly']);
