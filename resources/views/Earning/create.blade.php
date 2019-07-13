@extends('home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{is_null($earning->id)  ? 'Add Earning' : 'Update Earning'  }}                                
                </div>
                <div class="card-body"> 
                    <form action= "{{is_null($earning->id)  ? route('earning.save') : route('earning.update',$earning->id) }}" method="POST">
                        @csrf
                        @if(!is_null($earning->id)) 
                            @method('patch')
                        @endif
                        <div class="row">
                           <div class="col-md-8">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" 
                                           name="name"
                                           type="text" 
                                           value = "{{$earning->name}}"
                                           class="form-control @error('name') is-invalid @enderror" 
                                           placeholder="Nombre">
                                    @error('name')
                                        <span  class= "invalid-feedback" role= "alert">
                                            <strong> {{$message}}</strong>
                                        </span>
                                    @enderror
                                </div> 
                           </div>  
                           <div class="col-md-8">
                            <div class="form-group">
                                <label for="name">Amount</label>
                                <input id="amount" 
                                       name="amount"
                                       type="text" 
                                       value = "{{$earning->amount}}"
                                       class="form-control @error('amount') is-invalid @enderror" 
                                       placeholder="Amount">
                                @error('amount')
                                    <span  class= "invalid-feedback" role= "alert">
                                        <strong> {{$message}}</strong>
                                    </span>
                                @enderror
                            </div> 
                       </div>                                        
                        </div> 
                        <div class="row">
                            <div class="col-md-12 text-right">
                                @if(is_null($earning->id))
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
