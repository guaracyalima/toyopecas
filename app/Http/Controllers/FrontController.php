<?php

namespace Toyopecas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index (  )
    {
        //$topo = DB::table('topo')->select('titulo', 'descricao')->get();
        //$titulo = DB::select('SELECT titulo FROM topo');

        $titulo = DB::select('SELECT * FROM services ORDER BY id DESC LIMIT 6');
        $sobre = DB::select('SELECT * FROM sobres ORDER BY id DESC LIMIT 1');


        return view('index', compact('titulo', 'sobre'));
    }
}
