<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function redirectToLogin()
    {
        return view('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }


    public function checkLogin(Request $request)
    {
        $credenciales = $request->only('user', 'password');
        if (Auth::attempt($credenciales)){
            // Autenticación exitosa
            return redirect()->intended(route('index'));
        } else {
            $error = 'Usuario incorrecto';
            return view('login', compact('error'));
        }
    }



}
