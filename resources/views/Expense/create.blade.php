@extends('home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{is_null($expense->id)  ? 'Add Expense' : 'Update Expense'  }}                                
                </div>
                <div class="card-body"> 
                    <form action= "{{is_null($expense->id)  ? route('expense.save') : route('expense.update',$expense->id) }}" method="POST">
                        @csrf
                        @if(!is_null($expense->id)) 
                            @method('patch') 
                        @endif
                        <div class="row">
                           <div class="col-md-8">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" 
                                           name="name"
                                           type="text" 
                                           value = "{{$expense->name}}"
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
                                    <label for="name">Amount</label>
                                    <input id="amount" 
                                            name="amount"
                                            type="text" 
                                            value = "{{$expense->amount}}"
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
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input id="description" 
                                            name="description"
                                            type="text" 
                                            value = "{{$expense->description}}"
                                            class="form-control @error('description') is-invalid @enderror" 
                                            placeholder="Description">
                                    @error('desscription')
                                        <span  class= "invalid-feedback" role= "alert">
                                            <strong> {{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="priority_id">Priority: </label>
                                    <select id="priority_id" name="priority_id" class="custom-select">
                                        @forelse ($priorities as $priority)
                                            <option value="{{$priority->id}}" 
                                                {{is_null($expense->priority) ? 
                                                    ""  : 
                                                    ($expense->priority->id == $priority->id) ? "selected": "" }}>
                                            {{$priority->name}}</option>
                                        @empty                                            
                                        @endforelse
                                    </select>
                                </div> 
                            </div>
                        </div>                                     
                        <div class="row">
                            <div class="col-md-12 text-right">
                                @if(is_null($expense->id))
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
