<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function create()
    {
        return view('contato');
    }

     public function result(Request $request)
    {
        $data = $request->only(['nome', 'telefone', 'endereco', 'sexo']);
        return view('contatoresult', ['data' => $data]);
    }
}
