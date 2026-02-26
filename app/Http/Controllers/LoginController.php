<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    // tampilkan form login
    public function index()
    {

        return view('auth.login');

    }


    // proses login
    public function login(Request $request)
{

if($request->email == "admin@gmail.com" && $request->password == "123")
{

session([
'admin' => true
]);

return redirect('/admin/dashboard');

}

return redirect('/login')->with('error','Login gagal');

}


    public function logout()
    {

        session()->forget('admin');

        return redirect('/login');

    }

}
