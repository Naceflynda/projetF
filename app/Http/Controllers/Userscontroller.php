<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class Userscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
       return view('myprofile')->with('User',auth()->user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string','min:2', 'max:255'],
            'last_name' => ['required', 'string', 'min:2','max:255'],
            'username' => 'required|string|min:3|max:255|unique:users,username,'.auth()->id(),
            'email' => 'required|string|email|max:255|unique:users,email,'.auth()->id(),
            'password' => ['sometimes','nullable', 'string', 'min:8', 'confirmed'],
        ]);
        $user = auth()->user();
        $input = $request->except('password','password_confirmation');
        
        if (! $request->filled('password')) {
            $user->fill($input)->save();

            return back()->with('message', 'Profile updated successfully!');

        }
        
        $user->password = bcrypt($request->password);
        $user->fill($input)->save();

        return back()->with('message', 'Profile (and password) updated successfully!');
        
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
