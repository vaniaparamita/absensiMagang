<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelCuti;
use File;
use Auth;

class CutiDiajukan extends Controller
{
    //
    public function index(){
        $data = ModelCuti::where('status', 'Disetujui Manager/Supervisor')->get();
        return view('Admin/cutidiajukan', compact('data'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
