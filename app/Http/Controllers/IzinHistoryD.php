<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IzinDepartemen;
use File;
use Auth;

class IzinHistoryD extends Controller
{
    //
    public function index(){
        $data = IzinDepartemen::where('id_user', '=', Auth::user()->id)->get();
        return view('AdminDepartemen.historyizin2', compact('data'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
