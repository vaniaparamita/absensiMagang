<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CutiDepartemen;
use File;
use Auth;

class CutiHistoryD extends Controller
{
    //
    public function index(){
        $data = CutiDepartemen::where('id_user', '=', Auth::user()->id)->get();
        return view('AdminDepartemen.historycuti2', compact('data'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
