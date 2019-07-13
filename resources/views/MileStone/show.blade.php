@extends('home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Objetivos
                    <a href="{{route('milestone.create')}}">  
                        <button type="button" class="btn btn-outline-success btn-sm float-right">
                            <i class="fas fa-plus-square"></i>  Agregar
                        </button>
                    </a>                                      
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
                            @forelse ($milestones as $milestone)    
                                <tr>
                                    <th scope="row">{{$milestone->id}}</th>
                                    <td>{{$milestone->name}}</td>
                                    <td>                                  
                                        <div class="row">
                                            <div class="col-md-6">                                                                                             
                                                <a href="{{route('milestone.get', $milestone->id)}}">
                                                    <button type="button" class="btn btn-outline-primary btn-sm text-center ml-2">
                                                        <i class="far fa-edit"></i>  Edit
                                                    </button>                            
                                                </a>                                                                      
                                            </div>
                                            <div class="col-md-6">
                                                <form action="{{route('milestone.delete', $milestone->id)}}" method="post">
                                                        {{csrf_field()}}
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button class="btn btn-outline-danger text-center btn-sm ml-2" type="submit">
                                                        <i class="fas fa-trash-alt"></i>Delete
                                                    </button>
                                                </form>  
                                            </div>
                                        </div>                                                                                                            
                                    </td>
                                </tr>
                            @empty
                                <p>No hay objetivos almacenados</p>
                            @endforelse 
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
