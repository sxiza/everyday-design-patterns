<?php

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
    return view('welcome');
});

Route::get('/factory/{type}', 'EverydayPatternsController@factory');

Route::get('/sms/first', 'EverydayPatternsController@smsFirstWay');
Route::get('/sms/second', 'EverydayPatternsController@smsSecondWay');
Route::get('/sms/third', 'EverydayPatternsController@smsThirdWay');

Route::get('/state/{state}', 'EverydayPatternsController@switchState');
