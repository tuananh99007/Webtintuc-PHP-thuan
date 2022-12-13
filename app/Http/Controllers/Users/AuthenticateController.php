<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function login(){
        return view('users.authenticate.login');
    }
    public function post_login(Request $request){
        $email = $request->input('email', '');
        $password = $request->input('password', '');
        $credentials = [
            'email' => $email,
            'password' => $password,
            'role'=>0
            
        ];
        if (Auth::attempt($credentials)) {
            return redirect()->route('users.home');
        } else {
            return redirect()->route('users.login');
        }
    }
}
