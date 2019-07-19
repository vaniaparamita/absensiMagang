<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserAccess extends Controller
{
    //
    public function index(){
        $data = User::all();
        return view('Admin/useraccess', compact('data'));

    }
}
