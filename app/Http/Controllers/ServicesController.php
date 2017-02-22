<?php

namespace Toyopecas\Http\Controllers;

use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

//use File;
use Toyopecas\Models\Services;

class ServicesController extends Controller
{
    public function index (  )
    {
        return view('admin.services');
    }

    public function create (  )
    {
        if (Input::file('imagem')){

            $imagem = Input::file('imagem');
            $extencao = $imagem->getClienteoriginalExtension();

            if ($extencao != 'jpg' && $extencao != 'png'){
                return back()->with('erro', 'Erro: arquivo não suportado');
            }

        }

        $post = new Services;
        $post->titulo = Input::get('titulo');
        $post->texto = Input::get('texto');
        $post->img = "";

        $post->save();


        if (Input::file('imagem')){
            File::move($imagem, public_path().'/uploads/post-id'.$post->id.'.'.$extencao);
            $post->imagem = public_path().'/uploads/post-id'.$post->id.'.'.$extencao;
            $post->save();
        }

        return redirect('admin/services');



    }
}
