<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function create()
    {
        return view('contato');
    }

    public function store(Request $request)
    {
        $dados = $request->all();
        echo '<pre>';
        var_dump($dados);
        echo '</pre>';
    }
}
