<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MileStoneRequest;
use Illuminate\Support\Facades\Auth;
use App\MileStone;

class MileStoneController extends Controller
{
    public function create(){
        $milestone = new MileStone();
        return view("MileStone.create",compact("milestone"));
    }

    public function save(MileStoneRequest $request){
        $request->validated();
        $currentUser = Auth::user();
        MileStone::create([
            'name' => $request->name,
            'description' => $request->description
        ]);
        return redirect('milestone/all');;
    }

    public function update($id,MileStoneRequest $request){
        $request->validated();
        $milestone = MileStone::find($request->id);
        $milestone->name = $request->name;
        $milestone->description = $request->description;
        $milestone->save();
        return redirect('milestone/all');;
    }

    public function delete($id, Request $request){
        $milestone = MileStone::find($request->id);
        $milestone->delete();

        return redirect('milestone/all');;
    }

    public function all(){
        $milestone = new MileStone();
        $milestones = $milestone->get();
        return view("MileStone.show",compact('milestones'));               
    }
    
    public function get($id){
        $milestone = MileStone::find($id);
        return view("MileStone.create", compact("milestone"));
    }
}
