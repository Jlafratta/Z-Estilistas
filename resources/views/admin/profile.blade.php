@extends('layouts.dash')
@section('content')

<body class="user-profile">
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h5 class="title">Perfil de {{ $user->name }}</h5>
            </div>
            <div class="card-body">
              <form>
                {{-- <div class="row">
                  <div class="col-md-5 pr-1">
                    <div class="form-group">
                      <label>Company (disabled)</label>
                      <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                    </div>
                  </div>
                  <div class="col-md-3 px-1">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" placeholder="Username" value="michael23">
                    </div>
                  </div>
                  <div class="col-md-4 pl-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                  </div>
                </div> --}}
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label>Nombre completo</label>
                      <input type="text" class="form-control" placeholder="Nombre completo" value="{{ Auth::user()->name }}" readonly>
                    </div>
                  </div>
                  <div class="col-md-4 ">
                    <div class="form-group">
                      <label>Telefono celular</label>
                      <input type="text" class="form-control" placeholder="Telefono celular" value="{{ Auth::user()->phoneline }}" readonly>
                    </div>
                  </div>
                </div>

                <div class="row">
                  
                  <div class="col-md-5 ">
                      <div class="form-group">
                        <label>Correo electronico</label>
                        <input type="text" class="form-control" disabled="" placeholder="Email" value="{{ Auth::user()->email }}">
                      </div>
                    </div>
                  </div>
                  
                {{-- {{ $currentRol }}
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Sobre mi</label>
                      <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                    </div>
                  </div>
                </div> --}}
                
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-user">
            <div class="image">
              <img src="{{ asset('admin/img/default-avatar.png') }}" alt="...">
            </div>
            <div class="card-body">
              <div class="author">
                <a href="#">
                  <img class="avatar border-gray" src="{{ asset('admin/img/default-avatar.png') }}" alt="...">
                  <h5 class="title">{{ Auth::user()->name }}</h5>
                </a>
                <p class="description">
                  @foreach ($currentRol as $rol)
                      <p>{{ $rol->name == 'admin' ? "Administrador" : ($rol->name == 'employee' ? "Profesional" : "Cliente")}}</p>
                  @endforeach
                </p>
              </div>
              
              {{-- <p class="description text-center">
                "Lamborghini Mercy <br>
                Your chick she so thirsty <br>
                I'm in that two seat Lambo"
              </p> --}}
            </div>
            <hr>
            <div class="button-container">
              
              {{-- <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                <i class="fab fa-facebook-f"></i>
              </button>
              <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                <i class="fab fa-twitter"></i>
              </button>
              <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                <i class="fab fa-google-plus-g"></i>
              </button> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
    
@endsection