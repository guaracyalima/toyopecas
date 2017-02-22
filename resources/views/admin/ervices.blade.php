@extends('layouts.admin')
@section('content')


    <div class="container">
        <div class="card text-center">


            <div class="card-header alert alert-success">

            </div>
            @if(session('erro'))
                <div class="alert alert-danger">
                    {{ session('erro') }}
                </div>
                @endif

            {!! Form::open(['route' => 'admin.services.create', 'class' => 'form-inline']) !!}

            <div class="form-group">
                {!! Form::label('titulo', 'Titulo em destaque:') !!}

                {!! Form::text('titulo', null ,['class' => 'form-control', 'placeholder' => 'Conheça nossos produtos']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('texto', 'Descrição:') !!}

                {!! Form::text('texto', null ,['class' => 'form-control', 'placeholder' => 'Lorem ipsun...']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('imagem', 'Imagem:') !!}

                {!! Form::file('imagem', null ,['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary center-block']) !!}


            {!! Form::close() !!}

        </div>

    </div>



@endsection