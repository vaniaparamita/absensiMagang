<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IzinDepartemen;
use File;
use Auth;

class IzinHistoryHRD extends Controller
{
    //
    public function index(){
        $data = IzinDepartemen::where('id_user', '=', Auth::user()->id)->get();
        return view('Admin.historyizin', compact('data'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
