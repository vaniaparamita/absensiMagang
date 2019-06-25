<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absen;
use Auth;
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
     * @return \Illuminate\Http\Response
     */
    public function timeZone($location){
        return date_default_timezone_set($location);
    }
    public function index()
    {
        $this->timeZone('Asia/Jakarta');
        $user_id = Auth::user()->id;
        $date = date("Y-m-d");
        $cek_absen = Absen::where(['user_id' => $user_id, 'date' => $date])
                            ->get()
                            ->first();
        if (is_null($cek_absen)) {
            $info = array(
                "status" => "Anda belum mengisi absensi!",
                "btnIn" => "",
                "btnOut" => "disabled");
        } elseif ($cek_absen->time_out == NULL) {
            $info = array(
                "status" => "Jangan lupa absen keluar",
                "btnIn" => "disabled",
                "btnOut" => "");
        } else {
            $info = array(
                "status" => "Absensi hari ini telah selesai!",
                "btnIn" => "disabled",
                "btnOut" => "disabled");
        }

        $data_absen = Absen::where('user_id', $user_id)
                        ->orderBy('date', 'desc')
                        ->paginate(20);
        return view('home', compact('data_absen', 'info'));
    }
    
}
