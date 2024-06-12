<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function create()
    {
        return view('contato');
    }

    public function enviarcontato(Request $request)
    {
        $data = $request->all();
        return view('contatoresult')->with('data', $data);
    }
}
