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

Route::get('/datakaryawan', function () {
    return view('Admin/datakaryawan');
});

Route::get('/welcomeDepartemen', function () {
    return view('welcomeDepartemen');
});

Route::get('/tambahuser', function () {
    return view('Admin/tambahuseraccess');
});

// Route::get('/editkaryawan', function () {
//     return view('Admin/editkaryawan');
// });

Route::get('/admin', function () {
    return view('Admin/admin');
});

Route::get('/admin2', function () {
    return view('AdminDepartemen/admin2');
});

Route::get('/useraccess', function () {
    return view('Admin/useraccess');
});

Route::get('/datakaryawan2', function () {
    return view('AdminDepartemen/datakaryawan2');
});
Route::get('/tambahkaryawan', function () {
    return view('Admin/tambahkaryawan');
});

//KARYAWAN
Route::resource('/datakaryawan', 'DataKaryawan');

Route::resource('karyawan', 'DataKaryawan');

Route::post('/tambahkaryawan/store', 'DataKaryawan@store');
Route::post('/datakaryawan/destroy', 'DataKaryawan@destroy');
// Route::post('/datakaryawan/edit', 'DataKaryawan@edit');
// Route::post('/editkaryawan/update', 'TambahKaryawan@update');

//IZIN
Route::resource('izin','IzinController');
Route::post('/izin/store', 'IzinController@store');
  //hrd
  Route::resource('/izindiajukan', 'IzinDiajukan');
  Route::get('/izindone', 'IzinDone@index');
  //atasan
  Route::resource('/izindiajukan2', 'IzinDiajukan2');
  Route::get('/izindone2', 'IzinDone2@index');

//CUTI
Route::resource('cuti','CutiController');
Route::post('/cuti/store', 'CutiController@store');
  //hrd
  Route::resource('/cutidiajukan', 'CutiDiajukan');
  Route::get('/cutidone', 'CutiDone@index');
  //atasan
  Route::resource('/cutidiajukan2', 'CutiDiajukan2');
  Route::get('/cutidone2', 'CutiDone2@index');

Route::resource('home','HomeController');
Route::get('my-notification/{type}', 'HomeController@myNotification');

Route::get('newsletter',[
    'uses'=>'NewsLetterController@create',
    'as'=>'newsletter'
]);
Route::post('apply',[
    'uses'=>'NewsLetterController@store',
    'as'=>'apply'
]);

Route::get('admin-login','Auth\LoginAdminController@showLoginForm');
Route::post('admin-login', ['as' => 'admin-login', 'uses' => 'Auth\LoginAdminController@login']);
Route::get('admin-register','Auth\LoginAdminController@showRegisterPage');
Route::post('admin-register', 'Auth\LoginAdminController@register')->name('admin.register');


Route::resource('file','File');
Auth::routes();










Auth::routes();

Route::get('/home', 'HomeController@index');
