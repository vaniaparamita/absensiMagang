<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelKaryawan;
use Auth;


class DataKaryawan2 extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $category = Auth::user()->id_departemen;
        // dd($category);
        $data = ModelKaryawan::with('karyawan')
        ->whereHas('karyawan', function($q) use ($category)
          {$q-> where('id_departemen', $category);}
          )->get();        
          return view('AdminDepartemen/datakaryawan2', compact('data'));
    }
 
  
  
}

