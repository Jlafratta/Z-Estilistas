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
                            <i class="fa fa-snowflake icon-snow" aria-hidden="true"></i>
                        </div>
                    </div>
                    
                    <div class="h1">Nuevo producto</div>
                </div>
            </div>
            
        </div>  {{-- end title --}} 

        <div class="row">

            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                
                                <h5 class="card-title">Servicio</h5>
                                
                            </div>     
                            <div class="text-left">
                                
                                
                            </div>        
                        </div>
                        <br>
                        <form action="{{ route('admin.stock.store') }}" method="POST">
                            @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="name" class="">Titulo <span class="text-danger">*</span></label>
                                    <input value="" type="text" name="name" id="name" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="position-relative form-group">
                                    <label for="price" class="">Precio <span class="text-danger">*</span></label>
                                    <input value="" type="number"  name="price" id="price" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="position-relative form-group">
                                    <label for="price" class="">Stock <span class="text-danger">*</span></label>
                                    <input value="" type="number" name="stock" id="stock" class="form-control" required>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="position-relative form-group">
                                    <label for="description" class="">Descripcion </label>
                                    <input value="" type="text" name="description" id="description" class="form-control">
                                </div>
                            </div>

                            
                        </div>
                        

                        <div >
                            
                                <button class="float-right btn btn-success btn-lg mt-1 fa-lg" style="width: 47%" type="submit"> Guardar  <i class="fa fa-check"></i></button>
                     
                            </form>

                            {{-- <div class="float-left" style="width: 47%; color: white">
                                <a class="btn btn-danger btn-lg btn-block mt-1 fa-lg" data-toggle="modal" data-target="#deleteModal"> Eliminar <i class="fa fa-trash"></i></a>
                           </div> --}}
                           
                        </div>

                        
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
</div>

@endsection