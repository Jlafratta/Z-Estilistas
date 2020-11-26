@extends('layouts.dashboard')

@section('css')
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
@endsection

@section('javascript')
    <script type="text/javascript" src="{{ asset('admin/js/custom.js') }}"></script>   
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
        </div>  {{-- end title --}}  

        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
            <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                    <span>Corriente</span>
                </a>
            </li>
            <li class="nav-item">
                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                    <span>Transitorio</span>
                </a>
            </li>
        </ul>
        

        

        <div class="tab-content">

            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="main-card mb-3 card">
                            <div class="card-body">



                                <div class="d-flex justify-content-between">
                                    <div>
                                        
                                        <h5 class="card-title">Nuevo turno</h5>
                                        
                                    </div> 
                                                              
                                </div>
                                <br>

                                <form action="{{ route('admin.turnos.chooseTime') }}" method="POST">
                                    @csrf
                                
                                <div class="row mb-2">
                                    
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="client">Cliente </label>
                                            <select type="select" id="client" name="client" class="custom-select">
                                                @foreach ($clients as $client)
                                                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="date">Fecha</label>
                                        <input type="date" name="date" id="date" class="form-control">
                                    </div>
                                    
                                   
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <table id="tableSortable" class="mb-0 table-responsive-sm table  table-striped table-hover">
                                            <thead>
                                            <tr>
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
                                                    <tr>
                                                        <td scope="row" id="check">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="services[]" id="{{ $service->id }}" class=" cursor-pointer" value="{{ $service->id }}">
                                                                <td>
                                                                    <label for="{{ $service->id }}" class=" cursor-pointer" style="margin-bottom: .25rem; margin-top: .25rem;">
                                                                        {{ $service->name }}
                                                                    </label>
                                                                </td>
                                                            </div>
                                                        </td>
                                                        <td>{{ '$' . $service->price }}</td>
                                                    </tr>
                                                    @endforeach
                                                @endif
                                                
                                            </tbody>
                                        </table>
                                        @if(Session::has('errorMsg'))
                                            <p class="text-danger text-right font-italic">{{ Session::get("errorMsg") }}</p>
                                        @endif
                                    </div>
        
                                </div>
                                <div class="row d-flex justify-content-end mr-2 mt-3">
                                    <button class="btn btn-primary btn-lg" type="submit">Siguiente</button>
                                </div>
                                

                                </form>

                                

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="main-card mb-3 card">
                            <div class="card-body">



                                <div class="d-flex justify-content-between">
                                    <div>
                                        
                                        <h5 class="card-title">Nuevo turno</h5>
                                        
                                    </div> 
                                                              
                                </div>
                                <br>

                                <form action="{{ route('admin.turnos.chooseTimeTransit') }}" method="POST">
                                    @csrf
                                
                                <div class="row mb-2">
                                    
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="client">Cliente </label>
                                            <input type="text" name="client" class="form-control" placeholder="Nombre cliente..." required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="date">Fecha</label>
                                        <input type="date" name="date" id="date2" class="form-control">
                                    </div>
                                    
                                   
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <table id="tableSortable" class="mb-0 table-responsive-sm table  table-striped table-hover">
                                            <thead>
                                            <tr>
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
                                                    <tr>
                                                        <td scope="row" id="check">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="services[]" id="{{ 'B'.$service->id }}" class=" cursor-pointer" value="{{ $service->id }}">
                                                                <td>
                                                                    <label for="{{ 'B'.$service->id }}" class=" cursor-pointer" style="margin-bottom: .25rem; margin-top: .25rem;">
                                                                        {{ $service->name }}
                                                                    </label>
                                                                </td>
                                                            </div>
                                                        </td>
                                                        <td>{{ '$' . $service->price }}</td>
                                                    </tr>
                                                    @endforeach
                                                @endif
                                                
                                            </tbody>
                                        </table>
                                        @if(Session::has('errorMsg'))
                                            <p class="text-danger text-right font-italic">{{ Session::get("errorMsg") }}</p>
                                        @endif
                                    </div>
        
                                </div>
                                <div class="row d-flex justify-content-end mr-2 mt-3">
                                    <button class="btn btn-primary btn-lg" type="submit">Siguiente</button>
                                </div>
                                

                                </form>

                                

                            </div>
                            
                        </div>
                    </div>
                </div>
                
                
            </div>

    </div>
</div>


@endsection
