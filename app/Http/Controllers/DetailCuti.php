<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelCuti;
use File;

class DetailCuti extends Controller
{
    //
    public function index(){
        $data = ModelCuti::all();
        return view('AdminDepartemen/detailcuti', compact('data'));
    }
}
