<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function index()
    {
        if(Auth::check())
            return  redirect()->route('dashboard');

        if(Auth::viaRemember())
            return  redirect()->route('dashboard');

        return view('login');
    }

    public function login(Request $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;

        if (!Auth::attempt(['email'=>$request->email, 'password'=>$request->password], $remember_me))
        {
            return redirect()->back()->with('message','Email atau password salah, mohon periksa kembali.');
        }

        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
