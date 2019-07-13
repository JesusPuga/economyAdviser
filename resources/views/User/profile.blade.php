@extends('home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Objetivos                                    
                </div>

                <div class="card-body">
                <form action= "{{route('user.update',$user->id) }}" method="POST">
                        @csrf
                        @method('patch') 
                        
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" 
                                            name="name"
                                            type="text" 
                                            value = "{{$user->name}}"
                                            class="form-control @error('name') is-invalid @enderror" 
                                            placeholder="Name">
                                    @error('name')
                                        <span  class= "invalid-feedback" role= "alert">
                                            <strong> {{$message}}</strong>
                                        </span>
                                    @enderror
                                </div> 
                            </div>  
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input id="description" 
                                            name="description"
                                            type="text" 
                                            value = "{{$user->description}}"
                                            class="form-control @error('description') is-invalid @enderror" 
                                            placeholder="Description">
                                    @error('desscription')
                                        <span  class= "invalid-feedback" role= "alert">
                                            <strong> {{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>                          
                        </div>       
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="educationalLevel">Educational level</label>
                                    <input id="educationalLevel" 
                                            name="educationalLevel"
                                            type="text" 
                                            value = "{{$user->educationalLevel}}"
                                            class="form-control @error('educationalLevel') is-invalid @enderror" 
                                            placeholder="Educational level">
                                    @error('name')
                                        <span  class= "invalid-feedback" role= "alert">
                                            <strong> {{$message}}</strong>
                                        </span>
                                    @enderror
                                </div> 
                            </div>  
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input id="description" 
                                            name="description"
                                            type="text" 
                                            value = "{{$user->description}}"
                                            class="form-control @error('description') is-invalid @enderror" 
                                            placeholder="Description">
                                    @error('desscription')
                                        <span  class= "invalid-feedback" role= "alert">
                                            <strong> {{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>                          
                        </div>                                                         
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary btn-sm">Save</button>                                
                            </div>
                        </div> 
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
