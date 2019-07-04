<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelCuti;
use File;

class CutiDiajukan extends Controller
{
    //
    public function index(){
        $data = ModelCuti::all();
        return view('Admin/cutidiajukan', compact('data'));
    }
}
