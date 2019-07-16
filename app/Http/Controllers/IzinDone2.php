<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelIzin;


class IzinDone2 extends Controller
{
    //
    public function index(){
        $data = ModelIzin::where('status', 'Disetujui Departemen')->orwhere('status', 'Ditolak Departemen')->orwhere('status', 'Disetujui')->orwhere('status', 'Ditolak')->get();
        return view('AdminDepartemen/izindone2', compact('data'));
    }
}
