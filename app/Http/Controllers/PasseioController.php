<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasseioController extends Controller
{
    public function mapa()
    {
        return view('passeio.mapa'); // Exibe a view do mapa
    }
}
