<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home() {
        return view('home');
    }
    
    public function nosotros() {
        return view('nosotros');
    }
    
    public function indicadores() {
        return view('indicadores');
    }
    
    public function contacto() {
        return view('contacto');
    }
}
