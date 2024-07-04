<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $title = 'Login';

        return view('auth.login', compact(
            'title'
        ));
    }

    public function action_login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $login = [
            'email' => $email,
            'password' => $password
        ];

        if (Auth::attempt($login)) {
            return redirect('/dashboard');
        } else {
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
