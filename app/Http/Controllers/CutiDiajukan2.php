<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelCuti;

class CutiDiajukan2 extends Controller
{
    //
    public function index(){
        $data = ModelCuti::all();
         return view('AdminDepartemen/cutidiajukan2', compact('data'));
    }
}
