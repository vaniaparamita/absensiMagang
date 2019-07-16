<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelIzin;


class IzinDone extends Controller
{
    //
    public function index(){
    $data = ModelIzin::where('status', 'Disetujui')->orwhere('status', 'Ditolak')->get();
    return view('Admin/izindone',  compact('data'));
        }
}
