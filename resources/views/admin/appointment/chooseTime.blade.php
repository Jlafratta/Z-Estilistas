@extends('layouts.dashboard')

@section('css')
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
@endsection


@section('content')

<div class="app-main__outer">
    <div class="app-main__inner">

        {{-- TITLE SECTION --}}
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <div class="font-icon-lg">
                            <i class="fa fa-list-ol " aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="h1">Nuevo turno</div>
                </div>
            </div>
        </div>  {{-- end title --}}  

    
        <div class="row">
            <div class="col-md-10">
                <div class="">
                    <div class="card-body">


                        {{-- <div class="d-flex justify-content-between">
                            <div>
                                
                                <h5 class="card-title">Nuevo turno</h5>
                                
                            </div> 
                                                        
                        </div>
                        <br> --}}
                        <form action="{{ route('admin.turnos.store') }}" method="POST">
                            @csrf
                        <div class="row d-flex justify-content-around">
                                    
                            <div class="col-md-5 mt-3 card">
                                <div class="position-relative form-group">
                                    <div class="card-header">
                                        <label for="client" style="margin-bottom:0">Cliente </label>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="text-center"><strong>{{ $client->name }}</strong></h6>
                                        <input style="display:none" type="text" hidden name="clientId" value="{{ $client->id }}">
                                        <input style="display:none" type="text" hidden name="clientName" value="{{ $client->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 mt-3 card">
                                <div class="card-header">
                                    <label for="date" style="margin-bottom:0">Fecha</label>
                                </div>
                                <div class="card-body">
                                    <h5 class="text-center"><strong>{{ $date }}</strong></h6>
                                    <input type="text" hidden name="date" value="{{ $date }}">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4 d-flex justify-content-around">
                            <div class="col-md-5 mt-3 card">
                                <div class="position-relative form-group">
                                    <div class="card-header">
                                        <label for="client" style="margin-bottom:0">Servicios </label>
                                    </div>
                                    <div class="card-body">
                                        @foreach ($services as $service)
                                            <div class="d-flex justify-content-between">
                                                <input type="text" name="services[{{ $service->id }}]" value="{{ $service->id }}" hidden>
                                                <span class="text-center"><strong>{{ $service->name}}</strong></span>
                                                <span>$ {{ $service->price }}</span>
                                            </div>
                                        @endforeach
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <label for="client" style="margin-bottom:0">Total </label>
                                            <span><strong>$ {{ $total }} </strong></span>
                                            <input type="number" hidden name="totalPrice" value="{{ $total }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 mt-3 card">
                                <div class="position-relative form-group">
                                    <div class="card-header">
                                        <label for="client" style="margin-bottom:0">Duración </label>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <h4>{{ $totalTime }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-2 d-flex justify-content-center">
                            
                            <div class="col-md-11 card">
                                <div class="card-header">
                                    <h4 class="mt-2">Seleccionar horario</h4>
                                </div>
                                <div class="card-body">

                                    <table class=" table-responsive-sm table  table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>Hora</th>
                                            <th>Servicio</th>
                                            <th>Cliente</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody id="services">
                                            
                                            @foreach ($dailyDates as $dDate)
                                            {{-- <form action="{{ route('admin.turnos.store') }}" method="POST">
                                                @csrf --}}
                                            <tr>
                                                <td scope="row">
                                                    {{ $dDate['time'] }}
                                                </td>
                                                <td>
                                                    @if(isset($dDate['services']) )
                                                        @for ($i = 0; $i < count($dDate['services']); $i++)
                                                            {{ '● '. $dDate['services'][$i]}}<br>
                                                        @endfor
                                                        
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (isset($dDate['client']))
                                                        {{ $dDate['client'] }}
                                                    @endif
                                                </td>
                                                <td class="d-flex justify-content-end">
                                                    @if (!isset($dDate['services']))
                                                        <button class="btn btn-success btn-icon mr-3" type="submit" name="time" value="{{ $dDate['time'] }}"><i class="fa fa-check"></i></button>
                                                    @else
                                                    <div class="badge badge-pill badge-secondary">Reservado</div>
                                                    @endif
                                                </td>
                                            </tr>
                                            {{-- </form> --}}
                                            @endforeach
                                        </form>
                                        </tbody>
                                    </table>

                                </div>
                                
                                
                            </div>
                        </div>
                        

                    </div>
                    
                </div>
            </div>
        </div>

                
                
                
                

    </div>
</div>


@endsection