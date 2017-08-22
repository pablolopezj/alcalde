<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home() {
        return view('front.home');
    }
    
    public function nosotros() {
        return view('front.nosotros');
    }
    
    public function indicadores() {
        return view('front.indicadores');
    }
    
    public function contacto() {
        return view('front.contacto');
    }
}
