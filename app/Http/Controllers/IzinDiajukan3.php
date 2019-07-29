<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IzinDepartemen;
use App\User;
use File;
use Auth;


class IzinDiajukan3 extends Controller
{
    
    public function index(){
      $data = IzinDepartemen::where('status', null)->get();
      return view('AdminGM.izindiajukan3', compact('data'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
    
}
