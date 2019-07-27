<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IzinDepartemen;
use File;
use Auth;
class DetailIzinGM extends Controller
{
    //
    public function index(){
      $data = IzinDepartemen::where('status', null)->get();
      return view('AdminGM.detailizin_gm', compact('data'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit($id)
    {
        $data = IzinDepartemen::where('id','=',$id)->get();
        return view('AdminGM.detailizin_gm', compact('data'));
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
      $data = CutiDepartemen::where('id',$id)->first();
    //   $data->nama = $request->nama;
    //   $data->tanggal_mulai = $request->tanggal_mulai;
    //   $data->tanggal_selesai = $request->tanggal_selesai;
    //   $data->keterangan = $request->keterangan;
      $data->status = $request->status;
      $data->alasan = $request->alasan;

    //   if($request->file)
    //     { 
    //   $file = $request->file('file');
    //   $ext = $file->getClientOriginalExtension();
    //   $file->move('uploads/file',$file->getClientOriginalName());
    //     }
      $data->save();
      return redirect()->route('izindiajukan.index')->with('alert-success','Berhasil Menambahkan Data!');
        
    }
    public function show($id)
    {
        $data = IzinDepartemen::where('id','=',$id)->get();
        return view('AdminGM.detailizinterproses_hrd', compact('data'));
    }
}
