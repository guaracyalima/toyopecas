<?php

namespace Toyopecas\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index (  )
    {
        return view('index');
    }
}
