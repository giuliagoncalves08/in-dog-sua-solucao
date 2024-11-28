<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadastroPasseador;
use Illuminate\Support\Facades\Auth;

class LoginPasseadorController extends Controller
{
    public function login() {
        return view('CadastroPasseador.login');
    }

    public function authenticate(Request $req) {
       $credentials = array(
            'email' => $req->email,
            'password' => $req->password
        );

       if(Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect('/');
       }

       return back()->withErrors([
            'email' => "Usuario ou Senha Inválidos!"
        ])->withInput();
    }

    public function logout(Request $req) {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('login');
    }
}

