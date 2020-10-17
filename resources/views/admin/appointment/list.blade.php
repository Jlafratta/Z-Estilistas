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
                    <div class="h1">Turnos</div>
                </div>
            </div>
        </div>  

        <div class="row mb-2 d-flex justify-content-center">
                            
            <div class="col-md-11 card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="mt-2">Historial de turnos </h4>
                </div>
                <div class="card-body">

                    <table class=" table-responsive-sm table  table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Servicio</th>
                            <th>Cliente</th>
                            <th class="text-center">Estado</th>
                        </tr>
                        </thead>
                        <tbody id="services">
                            
                            @foreach ($appointments as $appoint)
                            {{-- <form action="{{ route('admin.turnos.store') }}" method="POST">
                                @csrf --}}
                            <tr>
                                <td scope="row">
                                    {{-- {{ $appoint->date }} --}}
                                    {{ date('d/m/y - h:i', strtotime($appoint->date)) }}
                                </td>
                                <td>
                                    @if(isset($appoint->products) )
                                        @foreach ($appoint->products as $service)
                                            {{ '● '. $service->name}}<br>
                                        @endforeach
                                        
                                    @endif
                                </td>
                                <td>
                                    {{ $appoint->user->name }}
                                </td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{ route('admin.turnos.edit', $appoint->id) }}">
                                        @if ($appoint['active'])
                                            {{-- <p class="font-italic text-muted item-centered">Libre!</p> --}}
                                            <div class="badge badge-pill badge-success">Activo</div>
                                        @else
                                            <div class="badge badge-pill badge-danger">Finalizado</div>
                                        @endif
                                    </a>
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
@endsection