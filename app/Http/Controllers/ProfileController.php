<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
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

        $profiledata = Profile::where('User_ID', $id)->latest()->first();
        return response()->json(['data' => $data, 'profileimg' => $profiledata]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
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
    public function ProfileImg(Request $request)
    {
        $data = $request->validate([
            'ProfileImg' => 'required',
            'User_ID' => 'required|numeric',
        ]);
    
        $user_id = $request->input('User_ID');
        $profile = Profile::where('User_ID', $user_id)->first();
    
        if ($profile) {

            if ($request->hasFile('ProfileImg')) {
                $file = $request->file('ProfileImg');
    
                $folderName = uniqid();
    
                $file->move(public_path('uploads/profileimg/' . $folderName), $file->getClientOriginalName());
    
                $filePath = '/uploads/profileimg/' . $folderName . '/' . $file->getClientOriginalName();
    
                $profile->update(['ProfileImg' => $filePath]);
    
                return response()->json(['data' => $profile]);
            }
        } else {

            if ($request->hasFile('ProfileImg')) {
                $file = $request->file('ProfileImg');
    
                $folderName = uniqid();
    
                $file->move(public_path('uploads/profileimg/' . $folderName), $file->getClientOriginalName());
    
                $filePath = '/uploads/profileimg/' . $folderName . '/' . $file->getClientOriginalName();
    
                $data['ProfileImg'] = $filePath;
                $data['User_ID'] = $user_id;
    
                $transaction = Profile::create($data);
    
                return response()->json(['data' => $transaction]);
            }
        }

        return response()->json(['error' => 'No file uploaded or profile picture could not be updated'], 400);
    }
    

}
