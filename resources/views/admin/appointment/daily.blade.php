@extends('layouts.dashboard')

@section('css')
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        {{-- TITLE SECTION --}}
        {{-- <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <div class="font-icon-lg">
                            <i class="fa fa-list-ol " aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="h1">Turnos</div>
                </div>
            </div>
        </div>  end title   --}}

        <div class="row mb-2 d-flex justify-content-center">
                            
            <div class="col-md-11 card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="mt-2">Turnos del dia </h4>
                    <h4 class="mt-2">{{ date('d/m/y', strtotime($actualDate)) }}</h4>
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
                            
                            {{-- <form action="{{ route('admin.turnos.show', $id) }}" method="GET">
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
                                        {{-- <p class="font-italic text-muted item-centered">Libre!</p> --}}
                                        <div class="badge badge-pill badge-success mr-3">Libre</div>
                                    @else
                                        @if(!$dDate['active'])
                                            <div class="badge badge-pill badge-danger">Finalizado</div>
                                        @else
                                        <a href="{{ route('admin.turnos.edit', $dDate['id']) }}">
                                            <div class="badge badge-pill badge-primary">Reservado</div>
                                        </a>
                                        @endif
                                        
                                    @endif
                                </td>
                            </tr>
                            
                            @endforeach
                        {{-- </form> --}}
                        </tbody>
                    </table>

                </div>
                
                
            </div>
        </div>
    
    </div>
</div>
@endsection
