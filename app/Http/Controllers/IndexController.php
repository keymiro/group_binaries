<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
        return view('index');
    }
    public function nosotros()
    {
        return view('nosotros');
    }
    public function productos()
    {
        return view('productos');
    }

    public function servicios()
    {
        return view('servicios');
    }
    public function cotizar()
    {
        return view('cotizar');
    }
    public function circuitocerrado()
    {
        return view('circuitocerrado');
    }
}
