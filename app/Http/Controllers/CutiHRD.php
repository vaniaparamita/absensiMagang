<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CutiDepartemen;
use File;
use Alert;
use DateTime;
use Auth;


class CutiHRD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CutiDepartemen::all();
        return view('Admin.pengajuancuti', compact('data'));

    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
      $data = new CutiDepartemen();
      $data->nama = $request->nama;
      $data->id_user = $request->id_user;
      $data->tanggal_mulai = $request->tanggal_mulai;
      $data->tanggal_selesai = $request->tanggal_selesai;
      $data->keterangan = $request->keterangan;
      $data->tanggung_jawab = $request->tanggung_jawab;
      $data->telepon = $request->telepon;

      $date_start = new DateTime($request->tanggal_mulai);
      $date_end = new DateTime($request->tanggal_selesai);
      $interval = $date_end->diff($date_start);
      //dd($interval); ->Testing Data
      $data->total = $interval->d+1;
      $photoFileName = 'cuti-'.time().'.'.request()->file->getClientOriginalExtension();
      $path = asset('uploads/file').'/'.$photoFileName;
      $data->file = $path; //uploads/file/
      request()->file->move(public_path('uploads/file'), $photoFileName);

      $data->save();
      return redirect()->route('cutiHRD.index')->with('cuti_success','Berhasil Mengajukan Cuti!');
    }
   
}
