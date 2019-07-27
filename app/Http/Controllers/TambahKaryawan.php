<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelKaryawan;
use Illuminate\Database\QueryException;

class TambahKaryawan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index(){
        $data = ModelKaryawan::all();
        return view('Admin/tambahkaryawan', compact('data'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('Admin.datakaryawan');
    }

    public function store(Request $request)
    {
      $data = new ModelKaryawan();
      $data->nik = $request->nik;
      $data->nama = $request->nama;
      $data->jenis_kelamin = $request->jenis_kelamin;
      $data->tempat_lahir = $request->tempat_lahir;
      $data->tanggal_lahir = $request->tanggal_lahir;
      $data->telepon = $request->telepon;
      $data->jabatan = $request->jabatan;
      $data->department = $request->department;
      $data->status = $request->status;
      $data->save();
      return redirect()->route('datakaryawan.index')->with('alert-success','Berhasil Menambahkan Data!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = ModelKaryawan::where('nik',$id)->get();
        return view('editkaryawan', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ModelKaryawan::where('nik',$id)->first();
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->telepon = $request->telepon;
        $data->jabatan = $request->jabatan;
        $data->department = $request->department;
        $data->status = $request->status;
        $data->save();
        return redirect()->route('datakaryawan.index')->with('alert-success','Berhasil Menambahkan Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = ModelKaryawan::where('id',$id)->first();
      $data->delete();
      return redirect()->route('DataKaryawan.index')->with('alert-success','Delete Data Successfully!');
    }
}
