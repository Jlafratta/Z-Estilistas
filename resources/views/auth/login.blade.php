@extends('layouts.auth')
@section('title')Ingresar @endsection

@section('content')
<div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url({{ asset('auth/img/login.jpg') }})"></div>
        <div class="content">
        <div class="container">
            <div class="col-md-4 ml-auto mr-auto">
                <div class="card card-login card-plain">
                    <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf
                
                    <div class="card-header text-center">
                        {{-- <div class="logo-container"> --}}
                          <img src="{{ asset('site/images/1-70px.svg') }}" alt="" width="420" height="180" srcset="{{ asset('site/images/1-113px.svg') }} 2x"/><br>
                        {{-- </div> --}}
                        
                        
                    </div>
                    <div class="card-body">
                        <div class="input-group no-border input-lg">
                          <div class="input-group-prepend" autofocus>
                            <span class="input-group-text">
                              <i class="now-ui-icons ui-1_email-85"></i>
                            </span>
                          </div>

                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" {{-- autofocus --}} placeholder="Correo electronico">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group no-border input-lg">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="now-ui-icons ui-1_lock-circle-open"></i>
                            </span>
                          </div>

                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label> --}}
                  
                        <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Iniciar sesion</button>
                        
                        <h6>
                          <a href="{{ route('register') }}" class="link">Crear una cuenta</a>
                        </h6>
                        
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Olvidaste tu contraseña?') }}
                            </a>
                        @endif

                        <div class="social-line">
                          <a href="{{ url('login/facebook') }}" class="btn btn-neutral btn-facebook btn-icon btn-round">
                            <i class="fab fa-facebook-square"></i>
                          </a>
                          <a href="{{ url('login/google') }}" class="btn btn-neutral btn-google btn-icon btn-round">
                            <i class="fab fa-google-plus"></i>
                          </a>
                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection