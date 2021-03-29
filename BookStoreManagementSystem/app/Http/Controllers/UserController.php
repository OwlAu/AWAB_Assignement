<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userinfo = User::find(Auth::user()->id);
        return view('profile')->with('userinfo',$userinfo);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
  
        /* $request->validate([
            
        ]); */

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address=$request->input('address');
        
        if($request->hasfile('profilePic')){
            $file=$request->file('profilePic');
            $extension = $file ->getClientOriginalExtension();//getting profilePic extension
            $filename = time().".".$extension;
            $file->move('uploads/profilePic/',$filename);
            $user->profilePic=$filename;
        }

        $user->save();

        return redirect('home');
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
