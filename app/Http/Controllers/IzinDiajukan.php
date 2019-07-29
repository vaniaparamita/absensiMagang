<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelIzin;
use File;
use Auth;


class IzinDiajukan extends Controller
{
    //
    public function index(){
        $data = ModelIzin::where('status', 'Disetujui Departemen')->get();
        return view('Admin/izindiajukan', compact('data'));
        }

        public function __construct()
        {
            $this->middleware('auth');
        }
        
}
