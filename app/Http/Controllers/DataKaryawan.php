<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelKaryawan;

class DataKaryawan extends Controller
{
    //
    public function index(){
    $data = ModelKaryawan::all();
    return view('Admin/datakaryawan', compact('data'));
    }
}
