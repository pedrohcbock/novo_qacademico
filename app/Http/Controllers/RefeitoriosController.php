<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefeitoriosController extends Controller
{
    public function add(){

        return view('refeitorios.add');

    }
    public function view(){

        return view('refeitorios.view');

    }
    public function cardapio(){

        return view('refeitorios.cardapio');

    }
}
