@extends('home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Earnings
                    <a href="{{route('earning.create')}}">  
                        <button type="button" class="btn btn-outline-success btn-sm float-right">
                            <i class="fas fa-plus-square"></i>  Add
                        </button>
                    </a>                                      
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>                                               
                            @forelse ($earnings as $earning)    
                                <tr>
                                    <th scope="row">{{$earning->id}}</th>
                                    <td>{{$earning->name}}</td>
                                    <td>{{$earning->amount}}</td>
                                    <td>                                                                          
                                        <div class="row">
                                            <div class="col-md-6">                                                                                             
                                                    <button type="button" class="btn btn-outline-primary btn-sm text-center ml-2">
                                                        <a href="{{route('earning.get', $earning->id)}}"><i class="far fa-edit"></i>  Edit</a>
                                                    </button>                                                                                                  
                                            </div>
                                            <div class="col-md-6">
                                                <form action="{{route('earning.delete', $earning->id)}}" method="post">
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
                                <p>There are not Earnings registered :c</p>
                            @endforelse 
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
