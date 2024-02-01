<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function index()
    {   
        return view('login');
    }

    public function login(Request $request)
    {

        $credentials = $request->only('username', 'password');
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            return view('dashboard');
        }
    
        return view('login');
    
 
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return view('login');
    }


    public function dashboard(){
        return view('dashboard');
    }

    
}
