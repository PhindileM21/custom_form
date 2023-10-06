<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use Session;

class CustomAuth extends Controller
{
    public function login(){
        return view ("auth.login");

    }
    public function registration(){
        return view ("auth.registration");

    }
        public function registerUser(Request $request)
    {
        $request->validate([


            'name'=>'required',
            'email'=>'required|email|unique:users',
            'phone_number'=>'required',
            'skills'=>'required',
            'weaknesses'=>'required',


        ]);
        $user = new User();
        $user -> name = $request ->name;
        $user -> email = $request -> email;
        $user -> phone_number = $request -> phone_number;
        $user -> skills = $request -> skills;
        $user -> weaknesses = $request -> weaknesses;
        $res = $user ->save();
        if($res){
            return back()->with('success','You have registered successfully');

        }else{
            return back ()->with('fail','something wrong');

        }


    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'phone_number'=>'required',
            'skills'=>'required',
            'weaknesses'=>'required'

        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->Session()->put('loginId',$user->id);
                return redirect('dashboard');

            }else{
                return back()->with('fail','password does not match');

            }

        }else{
            return back()->with('fail','This email is not registered');
        }
    }
    public function dashboard()
    {
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
        }
        return view('dashboard',compact('data'));
    }
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');

    }

    }
}
