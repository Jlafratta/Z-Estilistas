@extends('layouts.auth')
@section('title')Registro @endsection
@section('content')
    <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url({{ asset('auth/img/login.jpg') }})"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form class="form" method="POST" action="{{ route('register') }}">
            @csrf
              <div class="card-header text-center">
                <h3 class="card-title title-up">Registro</h3>
                {{-- <div class="logo-container"> --}}
                  {{-- <img src="{{ asset('auth/img/now-logo.png') }}" alt=""> --}}
                  {{-- <img src="{{ asset('site/images/1-70px.svg') }}" alt="" width="420" height="180" srcset="{{ asset('site/images/1-113px.svg') }} 2x"/><br> --}}
                {{-- </div> --}}
              </div>
              <div class="card-body">
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  {{-- <input type="text" class="form-control" placeholder="Usuario" required> --}}
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" {{-- autofocus --}} placeholder="Nombre completo">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons ui-1_email-85"></i>
                    </span>
                  </div>
                  {{-- <input type="password" placeholder="Contraseña" class="form-control" required/> --}}
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo electronico">

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
                  {{-- <input type="email" placeholder="Correo electronico" class="form-control" required/> --}}
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">

                    @error('password')
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
                    {{-- <input type="email" placeholder="Correo electronico" class="form-control" required/> --}}
                    {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Confirmar contraseña"> --}}
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contraseña">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons tech_mobile"></i>
                    </span>
                  </div>
                  {{-- <input type="email" placeholder="Correo electronico" class="form-control" required/> --}}
                  <input id="email" type="number" class="form-control" name="phoneline" required placeholder="Telefono celular">

                    
                </div>
                {{-- <div class="input-group no-border input-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons tech_mobile"></i>
                      </span>
                    </div>
                    {{-- <input type="email" placeholder="Correo electronico" class="form-control" required/> --}}
                    {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Confirmar contraseña">
                    <input id="phoneline" type="number" class="form-control" name="phoneline" placeholder="Telefono celular">
                      
                </div> --}}
                {{-- <input type="submit" class="btn btn-primary btn-round btn-lg btn-block" value="Crear cuenta"/> --}}
                <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">
                    {{ __('Crear cuenta') }}
                </button>
                <h6>
                  <a href="{{ route('login') }}" class="link">Iniciar sesion</a>
                </h6>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>    
@endsection
