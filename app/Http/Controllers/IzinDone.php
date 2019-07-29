<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelIzin;
use Auth;



class IzinDone extends Controller
{
    //
    public function index(){
    $data = ModelIzin::where('status', 'Disetujui')->orwhere('status', 'Ditolak')->get();
    return view('Admin/izindone',  compact('data'));
        }

        public function __construct()
        {
            $this->middleware('auth');
        }
}
