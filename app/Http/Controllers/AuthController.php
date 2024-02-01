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
    
            $data = [
                'username' => $user->username,
                'password' => $user->password,
            ];
    
            session(['id' => $user->id]);
            session(['firstname' => $user->firstname]);
            session(['lastname' => $user->lastname]);
            session(['jobtitle' => $user->jobtitle]);
    
            return response()->json(['success' => true, 'data' => $data]);
        }
    
        $errorMessage = 'Invalid credentials';
    
        return response()->json(['error' => $errorMessage]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function dashboard(){
        return view('dashboard');
    }
}
