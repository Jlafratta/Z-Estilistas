@extends('layouts.auth')
@section('title')Ingresar @endsection

@section('content')
<div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url({{ asset('auth/img/login.jpg') }})"></div>
        <div class="content">
        <div class="container">
            {{-- <div class="col-md-8 ml-auto mr-auto">
                <div class="card card-login card-plain">
                    <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf
                
                    
                    <div class="card-body"> --}}
                        {{-- <div class="input-group no-border input-lg">
                          <div class="input-group-prepend" autofocus>
                            <span class="input-group-text">
                              <i class="now-ui-icons ui-1_email-85"></i>
                            </span>
                          </div>

                          <input id="date" type="date" class="form-control" name="email" value="" required autocomplete="date" placeholder="Correo electronico">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}

                        {{-- <div class="input-group no-border input-lg">
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
                        </div> --}}
                        
                        
                        
                  
                        {{-- <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Iniciar sesion</button> --}}
                        
                        {{-- <h6>
                          <a href="{{ route('register') }}" class="link">Crear una cuenta</a>
                        </h6> --}}
                        
                        
{{--                        

                    </div>
                    </form>
                </div>
                
            </div> --}}
            <div class="col-md-8 ml-auto mr-auto">
                
                <div class="text-center mb-2">
                   <h2> Nuevo turno</h2>
                    
                </div>

                <table id="tableSortable" class="mb-0 table-responsive-sm table table">
                    <thead>
                    <tr class="tableH">
                        <th></th>
                        <th>Titulo</th>
                        <th>Precio</th>
                    </tr>
                    </thead>
                    <tbody id="services">
                        @if ($services->isEmpty())
                            </tbody></table> 
                            <div class="text-center font-italic">No se encontraron servicios</div>
                        @else   
                            @foreach ($services as $service)
                            <tr class="tableR ">
                                <td scope="row" id="check">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="services[]" id="{{ $service->id }}" class=" cursor-pointer checkCust" value="{{ $service->id }}">
                                        <td>
                                            <label for="{{ $service->id }}" class="cursor-pointer item-centered">
                                                <p>{{ $service->name }}</p>
                                            </label>
                                        </td>
                                    </div>
                                </td>
                                <td>
                                    <label for="{{ $service->id }}" class="item-centered cursor-pointer">
                                        <p>{{ '$' . $service->price }}</p>
                                    </label>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                        
                    </tbody>
                </table>
                <div class="row card-body">
                    <div class="col-md-6 mb-2">
                        <div class="input-group no-border input-lg">
                            <div class="input-group-prepend" autofocus>
                              <span class="input-group-text inputCust">
                                <i class="now-ui-icons ui-1_email-85"></i>
                              </span>
                            </div>
    
                            <input id="date" type="date" class="form-control inputCust" name="email" value="" required autocomplete="date" placeholder="Correo electronico">
    
                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <button type="submit" class="btn btn-primary btn-round btn-lg btn-block btnCust">Continuar</button>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
    <script>

            Date.prototype.toDateInputValue = (function() {
                var local = new Date(this);
                local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
                return local.toJSON().slice(0,10);
            });
            
            let date = document.getElementById('date');
            
            date.value = new Date().toDateInputValue();
        
        </script>
@endsection

