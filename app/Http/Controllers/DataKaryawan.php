<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Input;
use App\Image_uploaded;
use App\ModelKaryawan;
use DataTables;
use Image;
use Alert;
use Auth;


class DataKaryawan extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
        $data->status = $request->status;

        /*$photoFileName = 'avatar-'.time().'.'.request()->file->getClientOriginalExtension();
        $path = asset('uploads/file').'/'.$photoFileName;
        $data->file = $path; //uploads/file/
        request()->file->move(public_path('uploads/file'), $photoFileName); */
        $photoFileName = 'avatar-'.time().'.'.request()->file->getClientOriginalExtension();
        $path = 'uploads/file/'.$photoFileName;
        $db_save = asset('uploads/file').'/'.$photoFileName;
        $data->file = $db_save;
        $dir = 'uploads/file';

        $file = $request->file('uploads/file');

        $data->save();
        return redirect()->route('karyawan.index')->with('success', 'Data Karyawan Berhasil di Tambahkan!');

        if(!file_exists($dir)){
            mkdir($dir, 666, true);
        }
        $img = Image::make($file);

        $img->resize(320, 320);
        $img->save($path);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ModelKaryawan::where('nik','=',$id)->get();
        return view('Admin.detailkaryawan', compact('data'));       
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
        $data->status = $request->status;
        if($request->file)
        {
            $file = Input::file('file');
            $photoFileName = 'avatar-'.time().'.'.request()->file->getClientOriginalExtension();
            $path = 'uploads/file/'.$photoFileName;
            $db_save = asset('uploads/file').'/'.$photoFileName;
            $data->file = $db_save;
            $dir = 'uploads/file';
    
            if(!file_exists($dir)){
                mkdir($dir, 666, true);
            }
            $img = Image::make($file);
    
            $img->resize(320, 320);
            $img->save($path);

        }
        $data->save();
        return redirect()->route('karyawan.index')->with('success','Berhasil Mengubah Data!');

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
        return redirect()->route('karyawan.index')->with('success','Data berhasil dihapuskan!');
    }

   /* public function json(){
        return Datatables::of(ModelKaryawan::all())->make(true);
    } */

}
