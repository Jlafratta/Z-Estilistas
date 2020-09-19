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
              <h5 class="title">Editar perfil</h5>
            </div>
            <div class="card-body">
              <form action="{{ route('admin.users.update', $user) }}" method="POST" onsubmit="return checkCheckBoxes(this);">
                @csrf
                {{ method_field('PUT') }}    {{-- Declaro el tipo de metodo --}}
                
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label>Nombre completo</label>
                      <input type="text" class="form-control" name="name" placeholder="Nombre completo" value="{{ $user->name }}">
                    </div>
                  </div>
                  <div class="col-md-4 ">
                    <div class="form-group">
                      <label>Telefono celular</label>
                      <input type="text" class="form-control" name="phoneline" placeholder="Telefono celular" value="{{ $user->phoneline }}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label>Correo electronico</label>
                      <input type="text" class="form-control" name="email" disabled="" placeholder="Correo electronico" value="{{ $user->email }}">
                    </div>
                  </div>
                  @can('manage-roles')
                  <div class="col-md-4 ">
                    <div class="form-group">
                      <label>Rol</label><br>
                      @foreach ($roles as $role)
                      
                      <span>
                        <input type="checkbox" name="roles[]" placeholder="Telefono celular" value="{{ $role->id }}"
                         @if($user->roles->contains($role->id)) checked=checked @endif>
                        {{ $role->name == 'admin' ? "Administrador" : ($role->name == 'profesional' ? "Profesional" : "Cliente") }}
                      </span>
                      <br>
                      @endforeach
                      
                    </div>
                  </div>
                  @endcan
                </div>

                  
                  <div class="float-right"><button class="btn btn-info" type="submit">Guardar cambios</button></div>

                {{-- <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Sobre mi</label>
                      <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                    </div>
                  </div>
                </div>  --}}
                
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
                  <h5 class="title">{{ $user->name }}</h5>
                </a>
                <p class="description">
                  @foreach ($user->roles as $rol)
                      <p>{{ $rol->name == 'admin' ? "Administrador" : ($rol->name == 'profesional' ? "Profesional" : "Cliente")}}</p>
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