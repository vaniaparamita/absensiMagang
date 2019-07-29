<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelCuti;
use Auth;



class CutiDone2 extends Controller
{
    //
    public function index(){
        $data = ModelCuti::where('status', 'Disetujui Departemen')->orwhere('status', 'Ditolak Departemen')->orwhere('status', 'Disetujui')->orwhere('status', 'Ditolak')->get();
        return view('AdminDepartemen/cutidone2', compact('data'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
