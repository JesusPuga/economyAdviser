@extends('home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{is_null($milestone->id)  ? 'Add Milestone' : 'Update Milestone'  }}                                
                </div>
                <div class="card-body"> 
                    <form action= "{{is_null($milestone->id)  ? route('milestone.save') : route('milestone.update',$milestone->id) }}" method="POST">
                        @csrf
                        @if(!is_null($milestone->id)) 
                            @method('patch') 
                        @endif
                        <div class="row">
                           <div class="col-md-8">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" 
                                           name="name"
                                           type="text" 
                                           value = "{{$milestone->name}}"
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
                                            value = "{{$milestone->description}}"
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
                                @if(is_null($milestone->id))
                                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                                @else 
                                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                @endif
                            </div>
                        </div>
                    </form>               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
