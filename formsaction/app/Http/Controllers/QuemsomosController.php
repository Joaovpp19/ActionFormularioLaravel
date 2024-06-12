<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuemsomosController extends Controller
{
    public function somos(){
        return view('quemsomos');
    }
}