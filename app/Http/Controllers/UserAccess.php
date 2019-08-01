<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class UserAccess extends Controller
{
    //
    public function index(){
        $data = User::all();
        return view('Admin/useraccess', compact('data'));

    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function edit($id)
    {
        $data = User::where('id','=',$id)->get();
        return view('Admin.edituser', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = User::where('id',$id)->first();
        $data->id_departemen = $request->id_departemen;
        $data->name = $request->name;
        $data->email = $request->email;
        if($request->password){
            $data->password = bcrypt($request->password);
        }
        $data->role = $request->role;
        // $data->updated_at = Carbon::now();
        $data->save();

        return redirect()->route('useraccess.index')->with('useraccess_success','User Akses Berhasil Diperbarui!');
    }
    public function show($id)
    {
        //

    }


    public function destroy($id)
    {
        $data = User::where('id',$id)->first();
        $data->delete();
        return redirect()->route('useraccess.index')->with('useraccess_success','User Akses Berhasil Dihapus!'); 
    }
}
