<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\ModelKaryawan;
use DataTables;
use Alert;

class DataKaryawan extends Controller
{
    //
    public function index(){ //view
        $data = ModelKaryawan::all();
        return view('Admin.datakaryawan', compact('data'));
    }

    public function create() 
    {
        return view('Admin.tambahkaryawan');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

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
        $data->save();
        return redirect()->route('karyawan.index')->with('success','Berhasil Menambahkan Data!');
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
        $data = ModelKaryawan::where('nik','=',$id)->get();
        return view('Admin.editkaryawan', compact('data'));
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
        $data->save();
        return redirect()->route('karyawan.index')->with('success','Berhasil Menambahkan Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelKaryawan::find($id);
        $data->delete();
        return redirect()->route('karyawan.index')->with('success','Delete Data Successfully!');
    }

   /* public function json(){
        return Datatables::of(ModelKaryawan::all())->make(true);
    } */

}
