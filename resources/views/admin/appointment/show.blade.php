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
                    <div class="h1">Turno reservado</div>
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
                                        <h5 class="text-center"><strong>{{ $appointment->user->name }}</strong></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 mt-3 card">
                                <div class="card-header">
                                    <label for="date" style="margin-bottom:0">Fecha</label>
                                </div>
                                <div class="card-body">
                                    <h5 class="text-center"><strong>{{ $appointment->date }}</strong></h6>
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
                                        @foreach ($appointment->products as $service)
                                            <div class="d-flex justify-content-between">
                                                <input type="text" name="services[{{ $service->id }}]" value="{{ $service->id }}" hidden>
                                                <span class="text-center"><strong>{{ $service->name}}</strong></span>
                                                <span>$ {{ $service->price }}</span>
                                            </div>
                                        @endforeach
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <label for="client" style="margin-bottom:0">Total </label>
                                            <span><strong>$ {{ $appointment->price }} </strong></span>
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
                                            <h3>{{ $appointment->duration }}</h3>
                                        </div>
                                    </div>
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