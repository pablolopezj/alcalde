<?php

namespace App\Http\Controllers;

use Gate;
use Illuminate\Http\Request;


class ReporteController extends Controller
{
    public function index() {
        $report = true;
        return view('front.reporte');
    }
}
