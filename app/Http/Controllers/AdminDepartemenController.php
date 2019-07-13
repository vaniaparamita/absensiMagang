<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\User;
use Auth;


class AdminDepartemenController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        return view('AdminDepartemen.admin2');
    }
}
