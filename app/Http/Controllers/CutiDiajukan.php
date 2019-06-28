<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelCuti;

class CutiDiajukan extends Controller
{
    //
    public function index(){
        $data = ModelCuti::all();
        return view('Admin/cutidiajukan', compact('data'));
    }
}
