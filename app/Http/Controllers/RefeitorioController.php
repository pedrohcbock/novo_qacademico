<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefeitorioController extends Controller
{
    public function view(){
        return view('refeitorio.index');
    }
}
