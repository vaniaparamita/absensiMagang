<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ModelKaryawan;

class DataKaryawan3 extends Controller
{
    // public function __construct()
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $data = ModelKaryawan::all();
        return view('AdminGM/datakaryawan3', compact('data'));
    }
}
