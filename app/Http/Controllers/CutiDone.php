<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelCuti;


class CutiDone extends Controller
{
    //
    public function index(){
    $data = ModelCuti::where('status', 'Disetujui')->orwhere('status', 'Ditolak')->get();
    return view('Admin/cutidone',  compact('data'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
