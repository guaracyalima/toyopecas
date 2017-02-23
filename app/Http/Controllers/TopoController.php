<?php

namespace Toyopecas\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Toyopecas\Models\Topo;
use Toyopecas\Repositories\TopoRepositoryEloquent;

class TopoController extends Controller
{
    /**
     * @var TopoRepositoryEloquent
     */
    private $repository;

    /**
     * @var TopoRepository
     */


    public function __construct (  TopoRepositoryEloquent $repository)
    {
        $this->repository = $repository;
    }

    public function index ( )
    {
        $topo = DB::table('topo')->select('titulo', 'descricao')->get();
        return view('admin.topo', compact('topo'));
    }

    public function store (Request $request)
    {


        $data = new Topo;
        $data->titulo = Input::get('titulo');
        $data->descricao = Input::get('descricao');
        $data->save();


        return view('admin.topo');
    }

}
