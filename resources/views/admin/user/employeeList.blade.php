@extends('layouts.dashboard')

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
                    <div class="h1">Clientes</div>
                </div>
            </div>
        </div>  {{-- end title --}}   

        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="card-title mt-2">Listado de clientes</h5>
                            </div>
                            <div class="position-relative form-group">
                                {{-- <form action="{{ route('admin.tickets.index') }}" method="GET">
                                    <div class="custom-control custom-control-inline mb-1">
                                        <select class="form-control" type="text" name="clientId" placeholder="Seleccionar cliente...">
                                            <option value="">Seleccionar cliente</option> 
                                            <option value="0">CONTADO</option> 
                                            @foreach ($clients as $client)
                                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="custom-control custom-control-inline">
                                        @if(request('dateFilter'))
                                            <input class="form-control mr-1" type="date" name="dateFilter" value="{{ request('dateFilter') }}">
                                        @else
                                            <input class="form-control mr-1" type="date" name="dateFilter">
                                        @endif
                                        <button class="btn btn-light btn-icon" type="submit"><i class="fa fa-lg fa-search"></i></button>
                                    </div>
                                    
                                </form> --}}
                            </div>
                            
                        </div>
                        
                        <table id="tableSortable" class="mb-0 table-responsive-xl table  table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>Rol</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                @if ($employees->isEmpty())
                                    </tbody></table> 
                                    <div class="text-center font-italic">No se encontraron empleados</div>
                                @else   
	                                @foreach ($employees as $employee)
	                                <tr>
	                                    <th scope="row">{{ $employee->name }}</th>
	                                    <td>{{ $employee->email }}</td>
	                                    <td>{{ $employee->phoneline }}</td>
	                                    <td>@foreach($employee->roles as $role) {{ $role->name . ',' }} @endForeach</td>
	                                    <td class="text-center">
	                                        <button data-toggle="tooltip" title="Imprimir" data-placement="top" class="btn btn-primary  fa-lg"><i class=" pe-7s-config"></i></button> 
	                                    </td>
	                                </tr>
	                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        {{--<br> <div class="d-flex justify-content-center pagination ">{{ $tickets->render() }}</div> --}}
                        
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>



@endsection