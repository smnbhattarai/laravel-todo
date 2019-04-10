<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Auth;
use Session;

class TodosController extends Controller
{
    
    public function store(Request $request){
        $this->validate($request, [
            'todo' => 'required|min:5'
        ]);

        $todo = new Todo();
        $todo->user_id = Auth::user()->id;
        $todo->todo = $request->todo;
        $todo->save();

       Session::flash('success', 'Your task was saved successfully.');
       return redirect()->back();
    }

}
