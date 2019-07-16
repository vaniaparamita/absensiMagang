<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelCuti;
use File;

class CutiDiajukan extends Controller
{
    //
    public function index(){
        $data = ModelCuti::where('status', 'Disetujui Departemen')->get();
        return view('Admin/cutidiajukan', compact('data'));
    }
}
