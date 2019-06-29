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


Route::get('/welcomeDepartemen', function () {
    return view('welcomeDepartemen');
});

Route::get('/editkaryawan', function () {
    return view('Admin/editkaryawan');
});

Route::get('/tambahuser', function () {
    return view('Admin/tambahuseraccess');
});

Route::get('/admin', 'AdminController@index');
Route::resource('/izindiajukan', 'IzinDiajukan@index');
Route::get('/izindone', 'IzinDone@index');
Route::resource('/cutidiajukan', 'CutiDiajukan@index');
Route::get('/cutidone', 'CutiDone@index');
Route::get('/tambahkaryawan', 'TambahKaryawan@index');
Route::resource('/datakaryawan', 'DataKaryawan@index');
Route::get('/useraccess', 'UserAccess@index');

Route::get('/admin2', 'Admin2Controller@index');
Route::resource('/izindiajukan2', 'IzinDiajukan2@index');
Route::get('/izindone2', 'IzinDone2@index');
Route::resource('/cutidiajukan2', 'CutiDiajukan2@index');
Route::get('/cutidone2', 'CutiDone2@index');
Route::get('/datakaryawan2', 'DataKaryawan2@index');

Route::resource('file','File');



