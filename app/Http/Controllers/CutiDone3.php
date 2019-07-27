<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CutiDepartemen;
use Auth;


class CutiDone3 extends Controller
{
    //
    public function index(){
        $data = CutiDepartemen::where('status', 'Disetujui')->orwhere('status', 'Ditolak')->get();
        return view('AdminGM.cutidone3', compact('data'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
