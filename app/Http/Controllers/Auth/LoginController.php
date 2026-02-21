<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function show(){
        return view('auth.login');
    }

    public function login(Request $request){

        if(! Auth::attempt($request->validate([
            'username' => 'required',
            'password' => 'required'
        ]))){
            return back()->withErrors([
                'username' => 'username atau password tidak sesuai']);
        }

        $user = Auth::user();

        if($user->role === 'siswa'){
            return redirect('/siswa/dashboard');
        }


        return redirect('/dashboard');


    }
}
