@extends('layouts.admin')
@section('content')
<div class="login-bg">

<!--[if lt IE 9]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!--SECTION-->
<section class="l-main-container">
  <!--Main Content-->
  <div class="login-wrapper">
    <div class="login-container">
      <!--Logo-->
      <h1 class="login-logo"><img src="img/logo.png" alt="Proteus"></h1>
      <!--Login Form-->



      <form id="loginForm" role="form" method="POST" action="{{ route('login') }}" class="login-form">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <input id="email" type="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}" required autofocus>

          @if ($errors->has('email'))
            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
          @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <input id="password" type="password" name="password" placeholder="Password" class="form-control" required>
          @if ($errors->has('password'))
            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
          @endif
        </div>

        <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar de min?
              </label>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-dark btn-block btn-login">Entrar</button>
        <div class="form-group">

        </div>

        <div class="login-social">
          <div class="l-span-md-12">
            <div class="or"><span>- Ou -</span></div>
          </div>
          <div class="l-col-sm-6"><a href="#" class="btn btn-facebook btn-block"><i class="fa fa-facebook"></i>Acessar com facebook</a></div>
          <div class="l-col-sm-6"><a href="#" class="btn btn-twitter btn-block"><i class="fa fa-twitter"></i>Acessar com Twitter</a></div>
        </div>
        <div class="login-options"><a class="btn btn-link" href="{{ route('password.request') }}">
            Esqueceu a sua senha?
          </a>

          <a href="{{ route('register') }}" class="fr">Cadastre-se</a></div>
      </form>




    </div>
  </div>
</section>
  </div>
  @endsection