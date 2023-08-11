<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefeitoriosController extends Controller
{
    public function index(){

        return view('refeitorios.index');

    }
    public function view(){

        return view('refeitorios.view');

    }
    public function cardapio(){

        return view('refeitorios.cardapio');

    }
}
