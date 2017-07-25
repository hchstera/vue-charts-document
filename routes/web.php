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
Route::get('/line', 'DocumentController@line');
Route::get('/bar', 'DocumentController@bar');
Route::get('/radar', 'DocumentController@radar');
Route::get('/polar-area', 'DocumentController@polarArea');
Route::get('/pie', 'DocumentController@pie');
Route::get('/doughnut', 'DocumentController@doughnut');
Route::get('/databinding', 'DocumentController@databinding');
Route::get('/passjson', 'DocumentController@passjson');
Route::get('/mixcharts', 'DocumentController@mixcharts');

Route::get('/trace', 'DocumentController@trace');