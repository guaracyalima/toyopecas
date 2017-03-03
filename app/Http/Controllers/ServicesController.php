<?php

namespace Toyopecas\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

//use File;
use Toyopecas\Models\Services;
use Toyopecas\Repositories\ServicesRepository;

class ServicesController extends Controller
{

    /**
     * @var ServicesRepository
     */
    private $repository;

    public function __construct ( ServicesRepository $repository )
    {

        $this->repository = $repository;
    }
    public function index (  )
    {
        $dados = $this->repository->paginate(5);
        return view('admin.services', compact('dados'));
    }

    public function create (Request $request  )
    {


        $post = new Services;
        $post->titulo = Input::get('titulo');
        $post->texto = Input::get('texto');
        $post->img ="";

//        $imageName = $post->id.'.'.$request->img->getClientOriginalExtension();
//        $request->img->move(public_path('uploads'), $imageName);
//
//        $post->img = public_path('/uploads/').$post->id.'.'.$imageName ;
        $post->save();

        return view('admin.services');
        //return back()
          //  ->with('success','Cadastrado com sucesso!')
            //->with('path',$imageName);




    }

}
