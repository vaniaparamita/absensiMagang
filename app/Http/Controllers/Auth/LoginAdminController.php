<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginAdminController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    protected $guard = 'admin';
    protected $redirectTo = '/home';
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm()
    {
        return view('auth.login-admin');
    }
    public function guard()
    {
        return auth()->guard('admin');
    }
    public function showRegisterPage()
    {
        return view('auth.register-admin');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:199',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed'
        ]);
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('admin-login')->with('success','Registration Success');
    }
    public function login(Request $request)
    {
        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password ])) {
            return redirect()->route('Admin.admin');
        }
        return back()->withErrors(['email' => 'Email or password are wrong.']);
    }
}
