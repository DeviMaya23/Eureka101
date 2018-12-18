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
Route::get('skywatcher', function () {
    return view('skywatcher');
});

Route::get('maps', 'MapsController@show');
Route::get('maps/{area}', 'MapsController@show');
