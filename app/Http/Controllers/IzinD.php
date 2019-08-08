<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IzinDepartemen;
use File;
use Alert;
use DateTime;
use Auth;



class IzinD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = IzinDepartemen::all();
        return view('AdminDepartemen.pengajuanizin2', compact('data'));

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
      $data = new IzinDepartemen();
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
      return redirect()->route('izin3.index')->with('izin_success','Berhasil Mengajukan Izin!');
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
    // public function edit($id)
    // {
    //     $data = CutiDepartemen::where('id','=',$id)->get();
    //     return view('Admin.cutidiajukan', compact('data'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $data = IzinDepartemen::where('id',$id)->first();
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
      return redirect()->route('izindiajukan3.index')->with('cuti_success','Berhasil Mengubah Pengajuan Cuti!');
        
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
