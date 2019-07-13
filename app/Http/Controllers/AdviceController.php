<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advice;
use App\Http\Requests\AdviceRequest;
use Illuminate\Support\Facades\Auth;

class AdviceController extends Controller
{
    //
    public function create(){
        $advice = new Advice();
        return view("Advice.create",compact("advice"));
    }

    public function save(AdviceRequest $request){
        $request->validated();
        $currentUser = Auth::user();
        Advice::create([
            'name' => $request->name,
            'user_id' => $currentUser->id        
        ]);
        return redirect().route('advice.all');
    }

    public function update($id,AdviceRequest $request){
        $request->validated();
        $advice = Advice::find($request->id);
        $advice->name = $request->name;
        $advice->save();
        return redirect().route('advice.all');    
    }

    public function delete($id){
        $advice = Advice::find($request->id);
        $advice->delete();

        return redirect().route('advice.all');
    }

    public function all(){
        $advice = new Advice();
        $advices = $advice->get();
        return view("Advice.show",compact('advices'));               
    }
    
    public function get($id){
        $advice = Advice::find($id);
        return view("Advice.create", compact("advice"));
    }  
}
