@extends('layouts.dash')

@section('content')
    
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Clientes</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Nombre
                      </th>
                      <th>
                        Telefono
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Ultima visita
                      </th>
                      <th class="text-right">
                        
                      </th>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                      @if ($user->roles->contains(3))
                        
                        <tr>
                          <form action="{{ route('admin.users.edit', $user) }}" method="GET">
                            @csrf
                          <td>
                            <a class="text-muted" href={{ route('admin.users.show', $user) }}>{{ $user->name }}</a>
                          </td>
                          <td>
                            {{ $user->phoneline }}
                          </td>
                          <td>
                            {{ $user->email }}
                          </td>
                          <td>
                            10/05/2020 10:30
                          </td>
                          <td class="text-right">
                            <button type="submit" class="btn btn-info">Editar</button>
                          
                          </form>
                          
                            <button class="btn btn-danger" data-toggle="modal" data-target="#delete">
                              Eliminar
                            </button>
                          </td>
                        </tr>
                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                          @csrf
                          {{ method_field('DELETE') }}
                          {{-- <button type="submit" class="btn btn-danger">Eliminar</button> --}}
                          
                          <!-- Sart Modal -->
                          <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                  <h4 class="title">Eliminar usuario</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                  </button>
                                </div>
                                <div class="modal-body justifi-content-center">
                                  <p> Esta seguro que desea eliminar al usuario {{ $user->name }} ? 
                                  </p>
                                  <p>Estos cambios no podran ser revertidos</p>
                                </div>
                                <div class="modal-footer justify-content-center">
                                  <button type="submit" class="btn btn-danger">Eliminar</button>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--  End Modal -->
                          </form>
                      @endif
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Profesionales</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Nombre
                      </th>
                      <th>
                        Telefono
                      </th>
                      <th>
                        Email
                      </th>
                      <th class="text-right">
                        
                      </th>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                      @if ($user->roles->contains(2))
                        
                        <tr>
                          <form action="{{ route('admin.users.edit', $user) }}" method="GET">
                            @csrf
                          <td>
                            <a class="text-muted" href={{ route('admin.users.show', $user) }}>{{ $user->name }}</a>
                          </td>
                          <td>
                            {{ $user->phoneline }}
                          </td>
                          <td>
                            {{ $user->email }}
                          </td>
                          <td class="text-right">
                            <button type="submit" class="btn btn-info">Editar</button>

                          </form>
                          
                            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteProf">
                              Eliminar
                            </button>
                          </td>
                        </tr>
                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                          @csrf
                          {{ method_field('DELETE') }}
                          {{-- <button type="submit" class="btn btn-danger">Eliminar</button> --}}
                          
                          <!-- Sart Modal -->
                          <div class="modal fade" id="deleteProf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                  <h4 class="title">Eliminar usuario</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                  </button>
                                </div>
                                <div class="modal-body justifi-content-center">
                                  <p> Esta seguro que desea eliminar al usuario {{ $user->name }} ? 
                                  </p>
                                  <p>Estos cambios no podran ser revertidos</p>
                                </div>
                                <div class="modal-footer justify-content-center">
                                  <button type="submit" class="btn btn-danger">Eliminar</button>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--  End Modal -->
                          </form>
                      @endif
                      @endforeach
                      
                    </tbody>
                  </table>

                  {{-- PAGINATION --}}

                  <ul class="pagination d-flex justify-content-center">
                    <li class="page-item">
                      <a class="page-link" href="#link" aria-label="Previous">
                        <span aria-hidden="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#link">1</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="#link">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#link">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#link" aria-label="Next">
                        <span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                      </a>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Administradores</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Nombre
                      </th>
                      <th>
                        Telefono
                      </th>
                      <th>
                        Email
                      </th>
                      <th class="text-right">
                        
                      </th>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                      @if ($user->roles->contains(1))
                        
                        <tr>
                          <form action="{{ route('admin.users.edit', $user) }}" method="GET">
                            @csrf
                          <td>
                            <a class="text-muted" href={{ route('admin.users.show', $user) }}>{{ $user->name }}</a>
                          </td>
                          <td>
                            {{ $user->phoneline }}
                          </td>
                          <td>
                            {{ $user->email }}
                          </td>
                          <td class="text-right">
                            <button type="submit" class="btn btn-info">Editar</button>

                          </form>
                          
                            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteAdmin">
                              Eliminar
                            </button>
                          </td>
                        </tr>
                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                          @csrf
                          {{ method_field('DELETE') }}
                          {{-- <button type="submit" class="btn btn-danger">Eliminar</button> --}}
                          
                          <!-- Sart Modal -->
                          <div class="modal fade" id="deleteAdmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                  <h4 class="title">Eliminar usuario</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                  </button>
                                </div>
                                <div class="modal-body justifi-content-center">
                                  <p> Esta seguro que desea eliminar al usuario {{ $user->name }} ? 
                                  </p>
                                  <p>Estos cambios no podran ser revertidos</p>
                                </div>
                                <div class="modal-footer justify-content-center">
                                  <button type="submit" class="btn btn-danger">Eliminar</button>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--  End Modal -->
                          </form>
                      @endif
                      @endforeach
                      
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>
         

@endsection