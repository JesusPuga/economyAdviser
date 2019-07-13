<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Earning;
use App\Http\Requests\EarningRequest;

class EarningController extends Controller
{
    //
    public function create(){
        $earning = new Earning();
        return view("Earning.create",compact("earning"));
    }

    public function save(EarningRequest $request){
        $request->validated();
        $currentUser = Auth::user();
        Earning::create([
            'name' => $request->name,
            'amount' => $request->amount,
            'user_id' => $currentUser->id        
        ]);
        return redirect('earning/all');
    }

    public function update($id,EarningRequest $request){
        $request->validated();
        $earning = Earning::find($request->id);
        $earning->name = $request->name;
        $earning->amount = $request->amount;
        $earning->save();
        return redirect('earning/all');
    }

    public function delete($id, Request $request){
        $earning = Earning::find($request->id);
        $earning->delete();

        return redirect('earning/all');
    }

    public function all(){
        $earning = new Earning();
        $earnings = $earning->get();
        return view("Earning.show",compact('earnings'));               
    }
    
    public function get($id){
        $earning = Earning::find($id);
        return view("Earning.create", compact("earning"));
    }
}
