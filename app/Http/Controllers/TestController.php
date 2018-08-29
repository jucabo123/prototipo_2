<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // la función welcome(), retorna la vista welcome que se encuentra en resource/views/welcome
    public function welcome()
    {
        // $a=5;
        // $b=10;
        // $c=$a+$b;
        // return ("el valor de la suma es: $c");
    
        return view('welcome');
    }
}
