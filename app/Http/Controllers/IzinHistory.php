<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelIzin;
use File;
use Auth;

class IzinHistory extends Controller
{
    //
    public function index(){
        $data = ModelIzin::where('id_user', '=', Auth::user()->id)->get();
        return view('dashboard_izin', compact('data'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
