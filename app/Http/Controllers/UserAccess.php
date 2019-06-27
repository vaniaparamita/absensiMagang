<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAccess extends Controller
{
    //
    public function index(){
        return view('Admin/useraccess');
    }
}
