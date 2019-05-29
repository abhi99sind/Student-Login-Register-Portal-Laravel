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
    return view('create');
});
Route::post('confirmPass', 'PassController@index');
Route::post('check', 'VotpController@check');
Route::get('/otp', 'testing@sendEmai');
Route::get('/create','testing@index');
Route::post('store','testing@store');
Route::get('/Votp','VotpController@send');
Route::post('submit_log','testing@login');
