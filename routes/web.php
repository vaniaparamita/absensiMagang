<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/izin', 'IzinController@index');
Route::get('/cuti', 'CutiController@index');
Route::resource('file','File');

Route::resource('cuti','CutiController');
Route::resource('izin','IzinController');

Route::get('/izin', function () {
    return view('izin');
});
Route::post('/cuti/store', 'CutiController@store');
Route::post('/izin/store', 'IzinController@store');

Route::resource('home','HomeController');
Route::get('my-notification/{type}', 'HomeController@myNotification');



