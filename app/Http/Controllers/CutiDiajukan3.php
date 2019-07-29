<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CutiDepartemen;
use File;
use DateTime;
use Alert;
use Auth;


class CutiDiajukan3 extends Controller
{
    //for passing data to view
    public function index(){
      $data = CutiDepartemen::where('status', null)->get();
      return view('AdminGM.cutidiajukan3', compact('data'));
  }
  public function __construct()
  {
      $this->middleware('auth');
  }

  
    // public function edit($id)
    // {
    //     $data = CutiDepartemen::where('id','=',$id)->get();
    //     return view('AdminGM.cutidiajukan3', compact('data'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
}
