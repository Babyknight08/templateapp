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

    public function login(Request $request){
        $user = $request->only('username', 'password');
        
        if(Auth::attempt($user)){
            $user = Auth::user();
            
            // Set user data in the session
            session(['id' => $user->id, 'firstname' => $user->firstname, 'lastname' => $user->lastname]);
    
            // Retrieve the stored data from the session
            $data = [
                'success' => 'success',
                'id' => session('id'),
                'firstname' => session('firstname'),
                'lastname' => session('lastname'),
            ];
    
            return response()->json($data);
        }
    
        return response()->json(['error' => 'No user found']);
    }
    


    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect()->route('login');
    }
}
