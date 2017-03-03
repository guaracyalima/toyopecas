@extends('layouts.admin')

@section('content')
  <div class="login-bg">
    
    <!--[if lt IE 9]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <!--SECTION-->
    <section class="l-main-container">
      <!--Main Content-->
      <div class="login-wrapper register-wrapper">
        <div class="login-container">
          <!--Logo-->
          <h1 class="login-logo"><img src="img/logo.png" alt="Proteus"></h1>
          <!--Login Form-->
          <form id="registerForm" role="form" method="POST" action="{{ route('register') }}" class="login-form">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

              <input id="name" type="text" name="name" placeholder="Name" class="form-control" value="{{ old('name') }}" >

              @if ($errors->has('name'))
                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
              @endif
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <input id="email" type="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
              @if ($errors->has('email'))
                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <input id="password" type="password" name="password" placeholder="Senha" class="form-control" required>

              @if ($errors->has('password'))
                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
              @endif

            </div>
            <div class="form-group">
              <input id="password-confirm" type="password" name="password_confirmation" placeholder="Repita a senha" class="form-control" required>
            </div>

            <div class="checkbox">
              <input id="registerTerms" type="checkbox" name="registerTerms" class="checkradios checkradiosDark-1">Leu e aceita os
              <a href="#">Termos e Condições</a>
            </div>

            <button type="submit" class="btn btn-dark btn-block btn-login">Cadastrar</button>
            <div class="login-social">
              <div class="l-span-md-12">
                <div class="or"><span>- Ou -</span></div>
              </div>
              <div class="l-span-md-12 register-sign-in"><a href="{{ route('login') }}" class="btn btn-primary btn-block btn-login-register">Login</a></div>
              <div class="l-col-sm-6"><a href="#" class="btn btn-facebook btn-block"><i class="fa fa-facebook"></i>Conectar com o Facebook</a></div>
              <div class="l-col-sm-6"><a href="#" class="btn btn-twitter btn-block"><i class="fa fa-twitter"></i>Conectar com o Twitter</a></div>
            </div>
            <div class="login-options"></div>
          </form>
        </div>
      </div>
    </section>

@endsection