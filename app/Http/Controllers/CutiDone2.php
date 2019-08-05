<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelCuti;
use Auth;



class CutiDone2 extends Controller
{
    //
    public function index(){
        $data = ModelCuti::where('status', 'Disetujui Manager/Supervisor')->orwhere('status', 'Ditolak Manager/Supervisor')->orwhere('status', 'Disetujui')->orwhere('status', 'Ditolak')->get();
        return view('AdminDepartemen/cutidone2', compact('data'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
