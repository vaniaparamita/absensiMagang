<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelIzin;

class IzinDiajukan2 extends Controller
{
    //
    public function index(){
        $data = ModelIzin::all();
        return view('AdminDepartemen/izindiajukan2', compact('data'));
    }
}
