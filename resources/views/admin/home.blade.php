@extends('layouts.dash')

@section('content')


<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Turnos del dia</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                    Hora
                </th>
                <th>
                  Nombre
                </th>
                <th>
                  Servicio
                </th>
                <th>
                  Precio
                </th>
                <th class="text-right">
                  {{-- Visitas --}}
                </th>
              </thead>
              <tbody>
                <tr>
                  <td>
                      10:00
                  </td>
                  <td>
                    <a class="text-muted" href="#">Julian Lafratta</a>
                  </td>
                  <td>
                    Z Premium
                  </td>
                  <td>
                    $ 350
                  </td>
                  <td class="text-right">
                    <button class="btn btn-danger btn-icon"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                  </td>
                </tr>
                <tr>
                    <td>
                        11:00
                    </td>
                    <td>
                      <a class="text-muted" href="#">Julian Lafratta</a>
                    </td>
                    <td>
                      Z Premium
                    </td>
                    <td>
                      $ 350
                    </td>
                  <td class="text-right">
                    <button class="btn btn-danger btn-icon"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                  </td>
                </tr>
                <tr>
                    <td>
                        12:00
                    </td>
                    <td>
                      <a class="text-muted" href="#">Julian Lafratta</a>
                    </td>
                    <td>
                      Z Premium
                    </td>
                    <td>
                      $ 350
                    </td>
                  <td class="text-right">
                    <button class="btn btn-danger btn-icon"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                  </td>
                </tr>
                <tr>
                    <td>
                        13:00
                    </td>
                    <td>
                      <a class="text-muted" href="#">Julian Lafratta</a>
                    </td>
                    <td>
                      Z Premium
                    </td>
                    <td>
                      $ 350
                    </td>
                  <td class="text-right">
                    <button class="btn btn-danger btn-icon"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                  </td>
                </tr>
                <tr>
                    <td>
                        14:00
                    </td>
                    <td>
                      <a class="text-muted" href="#">Julian Lafratta</a>
                    </td>
                    <td>
                      Z Premium
                    </td>
                    <td>
                      $ 350
                    </td>
                  <td class="text-right">
                    <button class="btn btn-danger btn-icon"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                  </td>
                </tr>
                <tr>
                    <td>
                        15:00
                    </td>
                    <td>
                      <a class="text-muted" href="#">Julian Lafratta</a>
                    </td>
                    <td>
                      Z Premium
                    </td>
                    <td>
                      $ 350
                    </td>
                  <td class="text-right">
                    <button class="btn btn-danger btn-icon"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                  </td>
                </tr>
                <tr>
                    <td>
                        16:00
                    </td>
                    <td>
                      <a class="text-muted" href="#">Julian Lafratta</a>
                    </td>
                    <td>
                      Z Premium
                    </td>
                    <td>
                      $ 350
                    </td>
                  <td class="text-right">
                    <button class="btn btn-danger btn-icon"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
            

          </div>
        </div>
      </div>
    </div>



{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
