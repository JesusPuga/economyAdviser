@extends('home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Recomendaciones                                                      
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>                                               
                            @forelse ($advices as $advice)    
                                <tr>
                                    <th scope="row">{{$advice->id}}</th>
                                    <td>{{$advice->name}}</td>
                                    <td>                                  
                                        <div class="row">
                                            <div class="col-md-6">                                                                                             
                                                <button type="button" class="btn btn-outline-primary btn-sm text-center ml-2">
                                                    <i class="far fa-edit"></i>  Editar
                                                </button>                                                                                              
                                            </div>
                                            <div class="col-md-6">
                                                <button type="button" class="btn btn-outline-danger text-center btn-sm ml-2">
                                                    <i class="fas fa-trash-alt"></i>  Eliminar
                                                </button>
                                            </div>
                                        </div>                                                                                                              
                                    </td>
                                </tr>
                            @empty
                                <p>No hay recomendaciones</p>
                            @endforelse 
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
