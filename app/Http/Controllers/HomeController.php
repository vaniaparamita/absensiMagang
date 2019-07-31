<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use Auth;
use App\User;
use App\ModelKaryawan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
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
    public function index()
    {
        Alert::info('Info Message', 'Optional Title');

        $category = Auth::user()->id_departemen;
        $data = User::with('data')
        ->whereHas('data', function($q) use ($category)
        {$q-> where('nik', $category);}
        )->get();
        return view('home', compact('data'));
        
    }
}
