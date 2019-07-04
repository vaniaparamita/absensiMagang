<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelIzin;
use File;

class IzinDiajukan extends Controller
{
    //
    public function index(){
        $data = ModelIzin::all();
        return view('Admin/izindiajukan', compact('data'));
        }
        
}
