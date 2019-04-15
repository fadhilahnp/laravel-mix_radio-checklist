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

        return view('login');
    }

    public function login(Request $request)
    {
        if (!Auth::attempt(['email'=>$request->email, 'password'=>$request->password]))
        {
            return redirect()->back();
        }

        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
