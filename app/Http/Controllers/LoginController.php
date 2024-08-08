<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function actionLogin(Request $request)
    {
        $email = $request->email;
        $user = User::where('email', $email)->first();

        // password_verify digunakan untuk mengecek kesamaan pada password yang di sha(dienkripsi) dengan password yang tidak di enkripsi
        if (password_verify($request->password, $user->password)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        } else {
            return redirect()->back()->withErrors('Login Gagal!, Mohon Periksa Email dan Password Anda.');
        }
    }
}
