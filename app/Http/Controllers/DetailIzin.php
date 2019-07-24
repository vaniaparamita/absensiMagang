<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelIzin;
use File;
use Auth;
class DetailIzin extends Controller
{
    //
    public function index(){
        $category = Auth::user()->id_departemen;
        // dd($category);
        $data = ModelCuti::with('cuti')
        ->where('status', null)
        ->whereHas('cuti', function($q) use ($category)
          {$q-> where('id_departemen', $category);}
          )
        ->get();       
           return view('AdminDepartemen/detaiizin', compact('data'));
    }

    public function edit($id)
    {
        $data = ModelIzin::where('id','=',$id)->get();
        return view('AdminDepartemen.detailizin', compact('data'));
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
      $data->alasan = $request->alasan;

    //   if($request->file)
    //     { 
    //   $file = $request->file('file');
    //   $ext = $file->getClientOriginalExtension();
    //   $file->move('uploads/file',$file->getClientOriginalName());
    //     }
      $data->save();
      return redirect()->route('izin2.index')->with('alert-success','Berhasil Menambahkan Data!');
        
    }
    public function show($id)
    {
        $data = ModelIzin::where('id','=',$id)->get();
        return view('AdminDepartemen.detailizinterproses', compact('data'));
    }
}
