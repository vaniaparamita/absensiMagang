<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelIzin;
use File;
use Auth;


class IzinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelIzin::all();
        return view('izin', compact('data'));

    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelIzin();
      $data->nama = $request->nama;
      $data->id_user = $request->id_user;
      $data->tanggal_mulai = $request->tanggal_mulai;
      $data->tanggal_selesai = $request->tanggal_selesai;
      $data->keterangan = $request->keterangan;

      
      $photoFileName = 'izin-'.time().'.'.request()->file->getClientOriginalExtension();
      $path = asset('uploads/file').'/'.$photoFileName;
      $data->file = $path; //uploads/file/
      request()->file->move(public_path('uploads/file'), $photoFileName);
      
      $data->save();
      return redirect()->route('home.index')->with('izin_success','Berhasil Mengajukan Izin!');
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
        $data = ModelIzin::where('id','=',$id)->get();
        return view('Admin.izindiajukan', compact('data'));
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
        $data->status = $request->status;
        $data->save();
        return redirect()->route('izindiajukan.index')->with('izin_success','Berhasil Mengubah Pengajuan Izin!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
