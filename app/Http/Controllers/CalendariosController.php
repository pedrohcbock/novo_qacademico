<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendariosController extends Controller
{
    public function index(){
        return view('calendarios.index');
    }
}
