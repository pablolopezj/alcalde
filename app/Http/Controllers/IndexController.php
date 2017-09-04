<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home() {
        //Auth::loginUsingId(1);
        Auth::logout();
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
