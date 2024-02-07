<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->input('id');
        $data = User::where('id', $id)->first();
        return response()->json($data);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
<<<<<<< HEAD
        // $id = $request->input('id');
        // $username = $request->input('username');
        // $password = $request->input('password');
    
        // $user = User::where('id', $id)->first();
    
        // if (!empty($password)) {
        //     User::where('id', $id)
        //         ->update([
        //             'username' => $username,
        //             'password' => bcrypt($password),
        //         ]);
        // } else {
        //     User::where('id', $id)
        //         ->update(['username' => $username]);
        // }
    
        // return response()->json(['message' => 'User updated successfully']);


        
        
=======
        $id = $request->input('id');
        $username = $request->input('username');
        $password = $request->input('password');
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $address = $request->input('address');
        $contactno = $request->input('contactno');
        $division = $request->input('division');
        $section = $request->input('section');
        $jobtitle = $request->input('jobtitle');
   
        if (!empty($password)) {
            User::where('id', $id)
                ->update([
                    'username' => $username,
                    'password' => bcrypt($password),
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'address' => $address,
                    'contactno' => $contactno,
                    'division' => $division,
                    'section' => $section,
                    'jobtitle' => $jobtitle,
                ]);
        } else {
            User::where('id', $id)
                ->update(['username' => $username,        
                'firstname' => $firstname,
                'lastname' => $lastname,
                'address' => $address,
                'contactno' => $contactno,
                'division' => $division,
                'section' => $section,
                'jobtitle' => $jobtitle,]);
        }
    
        return response()->json(['message' => 'Profile Updated Successfully!']);
     
>>>>>>> 2da174bee994caea426a4fea2df7eed9dfa161fb
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
