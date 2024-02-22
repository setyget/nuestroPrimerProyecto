<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function contacto()
    {
        return view('contacto');
    }

}
