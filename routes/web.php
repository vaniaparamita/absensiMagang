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

Route::get('/dashboard_cuti', function () {
    return view('dashboard_cuti');
});

Route::get('/dashboard_izin', function () {
    return view('dashboard_izin');
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

Route::get('/useraccess', function () {
    return view('Admin/useraccess');
});

Route::get('/datakaryawan2', function () {
    return view('AdminDepartemen/datakaryawan2');
});
Route::get('/tambahkaryawan', function () {
    return view('Admin/tambahkaryawan');
});
Route::get('/cutidiajukan2', function () {
    return view('AdminDepartemen/cutidiajukan2');
});
Route::get('/cutidone2', function () {
    return view('AdminDepartemen/cutidone2');
});

Route::get('/admin3', function () {
    return view('AdminGM/admin3');
});
Route::get('/admin2', function () {
    return view('AdminDepartemen/admin2');
});
Route::get('/pengajuancuti', function () {
    return view('Admin/pengajuancuti');
});
Route::get('/pengajuanizin', function () {
    return view('Admin/pengajuanizin');
});
Route::get('/pengajuancuti2', function () {
    return view('AdminDepartemen/pengajuancuti2');
});
Route::get('/pengajuanizin2', function () {
    return view('AdminDepartemen/pengajuanizin2');
});
Route::get('/edituser', function () {
    return view('Admin/edituser');
});


//KARYAWAN
Route::resource('/datakaryawan', 'DataKaryawan');
Route::resource('/datakaryawan3', 'DataKaryawan3');
Route::resource('karyawan', 'DataKaryawan');
Route::post('/tambahkaryawan/store', 'DataKaryawan@store');
Route::post('/datakaryawan/destroy', 'DataKaryawan@destroy');
Route::get('/datakaryawan2', 'DataKaryawan2@index');

// Route::post('/datakaryawan/edit', 'DataKaryawan@edit');
// Route::post('/editkaryawan/update', 'TambahKaryawan@update');

//IZIN
Route::resource('izin','IzinController');
Route::resource('izin2','IzinDiajukan2');
Route::resource('izindiajukan3','IzinDiajukan3');
Route::resource('izin3','IzinD');
Route::resource('izinHRD','IzinHRD');

Route::post('/izin/store', 'IzinController@store');
  //hrd
  Route::resource('/izindiajukan', 'IzinDiajukan');
  Route::get('/izindone', 'IzinDone@index');
  //atasan
  Route::resource('/izindiajukan2', 'IzinDiajukan2');
  Route::get('/izindone2', 'IzinDone2@index');
  //gm
  //Route::resource('/izindiajukan3', 'IzinDiajukan3');
  Route::get('/izindone3', 'IzinDone3@index');


//CUTI
Route::resource('cuti','CutiController');
Route::resource('cuti2','CutiDiajukan2');
Route::resource('cutidiajukan3','CutiDiajukan3');
Route::resource('cuti3','CutiD');
Route::resource('cutiHRD','CutiHRD');

Route::post('/cuti/store', 'CutiController@store');
Route::post('/cuti3/store', 'CutiDiajukan3@store');

  //hrd
  Route::resource('/cutidiajukan', 'CutiDiajukan');
  Route::get('/cutidone', 'CutiDone@index');
  //atasan
  Route::get('/cutidiajukan2', 'CutiDiajukan2@index');
  Route::get('/cutidone2', 'CutiDone2@index');
  //gm
 // Route::get('/cutidiajukan3', 'CutiDiajukan3@index');
  Route::get('/cutidone3', 'CutiDone3@index');


  Route::resource('home','HomeController');
  Route::get('my-notification/{type}', 'HomeController@myNotification');



//Route::resource('file','File');
Auth::routes();
Route::middleware(['admin'])->group(function () {
    Route::resource('admin', 'UserController');
});
Route::middleware(['admin-departemen'])->group(function () {
    Route::resource('admin2', 'AdminDepartemenController');
});
Route::resource('admin', 'UserController');

Route::resource('useraccess', 'UserAccess');
//Route::get('/useraccess', 'UserAccess@index');

Route::resource('cutihistory','CutiHistory');
Route::resource('cutihistoryHRD','CutiHistoryHRD');
Route::resource('cutihistoryD','CutiHistoryD');
Route::get('dashboard_cuti', 'CutiHistory@index');


Route::resource('izinhistory','IzinHistory');
Route::resource('izinhistoryHRD','IzinHistoryHRD');
Route::resource('izinhistoryD','IzinHistoryD');
Route::get('dashboard_izin', 'IzinHistory@index');
Route::get('izinhistory', 'IzinHistoryHRD@index');


Route::resource('detailcuti', 'DetailCuti');
Route::resource('detailizin', 'DetailIzin');

Route::resource('detailcuti_hrd', 'DetailCutiHRD');
Route::resource('detailizin_hrd', 'DetailIzinHRD');

Route::resource('detailcuti_gm', 'DetailCutiGM');
Route::resource('detailizin_gm', 'DetailIzinGM');

//ROUTE SEMENTARA
Route::get('/tambahkaryawan','TambahKaryawan@json')->name('json');







