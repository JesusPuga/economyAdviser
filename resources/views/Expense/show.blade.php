@extends('home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gastos
                    <a href="{{route('expense.create')}}">  
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
                            <th scope="col">Priority</th>
                            <th scope="col">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>                                               
                            @forelse ($expenses as $expense)    
                                <tr>
                                    <th scope="row">{{$expense->id}}</th>
                                    <td>{{$expense->name}}</td>
                                    <td>{{$expense->priority->name}}</td>
                                    <td>                                  
                                        <div class="row">
                                            <div class="col-md-6">                                                                                             
                                                    <button type="button" class="btn btn-outline-primary btn-sm text-center ml-2">
                                                        <a href="{{route('expense.get',$expense->id)}}"><i class="far fa-edit"></i>  Editar</a>
                                                    </button>                                                  
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <form action="{{route('expense.delete', $expense->id)}}" method="post">
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
                                <p>No hay gastos registrados</p>
                            @endforelse 
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
