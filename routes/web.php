<?php

use Uniqud\LaravelAgent\Constants\Constant;
use Uniqud\LaravelAgent\Http\Controllers\AuthController;
use Uniqud\LaravelAgent\Http\Controllers\TaskController;

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

Route
    ::prefix(Constant::BASE_URL)
    ->group(function() {
        Route::get('get-token', [AuthController::class, 'getToken']);
        Route::post('run', [TaskController::class, 'run']);
    });