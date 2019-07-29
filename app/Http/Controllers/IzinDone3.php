<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IzinDepartemen;
use Auth;



class IzinDone3 extends Controller
{
    //
    public function index(){
        $data = IzinDepartemen::where('status', 'Disetujui')->orwhere('status', 'Ditolak')->orwhere('status', 'Disetujui')->get();
        return view('AdminGM/izindone3', compact('data'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
