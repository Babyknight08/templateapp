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
    
            return redirect()->route('dashboard');
        }
        session()->flash('error', 'Invalid Credentials');
        return redirect()->route('index')->with('error', 'Incorrect Credentials');
    
 
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('index');
    }


    public function dashboard(){
        return view('dashboard');
    }

    
}
