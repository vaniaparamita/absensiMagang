<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelIzin;
use File;

class IzinDiajukan2 extends Controller
{
    
    public function index(){
        $data = ModelIzin::where('status', null)->get();
        return view('AdminDepartemen/izindiajukan2', compact('data'));
    }
    public function edit($id)
    {
        $data = ModelIzin::where('id','=',$id)->get();
        return view('AdminDepartemen.izindiajukan2', compact('data'));
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
      $data = ModelIzin::where('id',$id)->first();
    //   $data->nama = $request->nama;
    //   $data->tanggal_mulai = $request->tanggal_mulai;
    //   $data->tanggal_selesai = $request->tanggal_selesai;
    //   $data->keterangan = $request->keterangan;
      $data->status = $request->status;
    //   if($request->file)
    //     { 
    //   $file = $request->file('file');
    //   $ext = $file->getClientOriginalExtension();
    //   $file->move('uploads/file',$file->getClientOriginalName());
    //     }
      $data->save();
      return redirect()->route('izin2.index')->with('alert-success','Berhasil Menambahkan Data!');
        
    }
}
