<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelCuti;


class CutiDone2 extends Controller
{
    //
    public function index(){
        $data = ModelCuti::where('status', 'Disetujui Departemen')->orwhere('status', 'Ditolak Departemen')->get();
        return view('AdminDepartemen/cutidone2' compact('data'));
    }
}
