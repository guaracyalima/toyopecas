<?php

namespace Toyopecas\Http\Controllers;

use Illuminate\Http\Request;
use Toyopecas\Repositories\ProdutosRepository;

class ProdutosController extends Controller
{
    /**
     * @var ProdutosRepository
     */
    private $repository;

    public function __construct ( ProdutosRepository $repository )
    {

        $this->repository = $repository;
    }
    public function index (  )
    {
        return view('admin.produtos');
    }

    public function create (Request $request )
    {
        $data = $request->all();

        $this->repository->create($data);

        return view('admin.produtos');
    }
}
