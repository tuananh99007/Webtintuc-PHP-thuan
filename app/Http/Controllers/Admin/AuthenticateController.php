<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function login(){
        return view('admin.authenticate.login');
    }
    
    public function post_login(Request $request){
        $email = $request->input('email', '');
        $password = $request->input('password', '');
        $credentials = [
            'email' => $email,
            'password' => $password,
            'role'=>1
            
        ];
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.users.list');
        } else {
            return redirect()->route('admin.login');
        }
    }
}
