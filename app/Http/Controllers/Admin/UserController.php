<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // public function login()
    // {
    //     return view('admin.users.login');
    // }
    // public function postlogin(Request $request)
    // {
    //     $email = $request->input('email', '');
    //     $password = $request->input('password', '');
    //     $credentials = [
    //         'email' => $email,
    //         'password' => $password,
    //     ];
    //     if (Auth::attempt($credentials)) {
    //         return redirect()->route('admin.users.list');
    //     } else {
    //         return redirect()->route('admin.users.login');
    //     }
    // }
    public function list(Request $request)
    {   
        $email = $request->input('email', null);
        $users = DB::table('users')->select("id", 'name', 'email', 'password', 'remember_token');
        if (!empty($email)) {
            $users = $users->where('email', 'like', '%' . $email . '%');
        }

        $users = $users->paginate(4);
        return view('Admin.users.list', compact('users','email'));
    }
    public function add()
    {
        return view('Admin.users.add');
    }
    public function postadd(Request $request)
    {
        $name = $request->input('name', '');
        $email = $request->input('email', '');
        $password = $request->input('password', '');
        $remember_token = $request->input('remember_token', '');
        if (
            empty($name) != true &&
            empty($email) != true &&
            empty($password) != true &&
            empty($remember_token) != true
        ) {
            DB::table('users')->insert([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password),
                'remember_token' => $remember_token,
            ]);
            return redirect()->route('admin.users.list');
        } else {
            return view('users.postupdata', compact('name', 'email', 'password', 'remember_token'));
        }
    }
    public function update(Request $request)
    {
        $id = $request->input('id', '');
        $user = DB::table('users')->select("id", 'name', 'email', 'password', 'remember_token')->where('id', $id)->first();
        return view('Admin.users.update', compact('user'));
    }
    public function postupdate(Request $request)
    {
        $id = $request->input('id', '');
        $name = $request->input('name', '');
        $email = $request->input('email', '');
        $password = $request->input('password', '');
        $remember_token = $request->input('remember_token', '');
        Db::table('users')->where('id', $id)->update([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'remember_token' => $remember_token,
        ]);
        return redirect()->route('admin.users.list');
    }
    public function detail(Request $request)
    {
        $id = $request->input('id', '');
        $user = DB::table('users')->select("id", 'name', 'email', 'password', 'remember_token')->where('id', $id)->first();
        return view('Admin.users.detail', compact('user'));
    }
    public function delete(Request $request)
    {
        $id = $request->input('id', '');
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('admin.users.list');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
