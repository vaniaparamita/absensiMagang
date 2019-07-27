<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelKaryawan;

class DataKaryawan2 extends Controller
{
    //
    public function index(){
        $data = ModelKaryawan::all();
        return view('AdminDepartemen/datakaryawan2', compact('data'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
  
  
}

