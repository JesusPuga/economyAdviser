<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExpenseRequest;
use Illuminate\Support\Facades\Auth;
use App\Expense;
use App\Priority;

class ExpenseController extends Controller
{
    //
    public function create(){
        $expense = new Expense();
        $priorities = Priority::get();

        return view("Expense.create",compact("expense", "priorities"));
    }

    public function save(ExpenseRequest $request){
        $request->validated();
        $currentUser = Auth::user();
        
        Expense::create([
            'name' => $request->name,
            'amount' => $request->amount,
            'description' => $request->description,
            'priority_id' => $request->priority_id,            
            'user_id' => $currentUser->id        
        ]);
        return redirect('expense/all');
    }

    public function update($id,ExpenseRequest $request){
        $request->validated();
        $expense = Expense::find($request->id);
        $expense->name = $request->name;
        $expense->amount = $request->amount;
        $expense->description = $request->description;
        $expense->priority_id = $request->priority_id;
        $expense->save();
        return redirect('expense/all');    
    }

    public function delete($id,Request $request){
        $expense = Expense::find($request->id);
        $expense->delete();

        return redirect('expense/all');
    }

    public function all(){
        $expense = new Expense();
        $expenses = $expense->get();
        return view("Expense.show",compact('expenses'));               
    }
    
    public function get($id){
        $expense = Expense::find($id);
        $priorities = Priority::get();
        return view("Expense.create", compact("expense", "priority","priorities"));
    }
}
