<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelCuti;
use File;
use Auth;

class CutiHistory extends Controller
{
    //
    public function index(){
        $data = ModelCuti::where('id_user', '=', Auth::user()->id)->get();
        return view('dashboard_cuti', compact('data'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
