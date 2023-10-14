<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('pages.user.auth.register', [
            'title' => 'Register'
        ]);
    }

    public function register(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|confirmed',
            'no_telp'=>'required',
        ]);

        $name=$request->input('name');
        $email=$request->input('email');
        $password=$request->input('password');
        $no_telp=$request->input('no_telp');
        $role='0';
        if(strpos('email','admin') !== false){
            $role='1';
        }
       $validated= User::create([
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
            'role'=>$role,
            'no_telp'=>$no_telp,
        ]);

         if($validated){
             return redirect()->route('login')->with('success','Registrasi berhasil!');
         }

    }
}
