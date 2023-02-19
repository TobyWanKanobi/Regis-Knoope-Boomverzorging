<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login() {
        return view('admin.login', [
        ]);
    }

    public function authenticate(Request $request) {
        $credentials = $request->only('name', 'password');
        print_r($credentials);
 
    if (Auth::attempt($credentials)) {

        return redirect()->intended('/admin/dashboard');

    }
    
    return view('admin.login', ['error' => 'authentiaion failed']);
    }

    function logout() {
        Auth::logout();
        return redirect('/login');
    }
    
}
