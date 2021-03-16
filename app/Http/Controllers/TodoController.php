<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Todo;
use App\DoneTodo;

class TodoController extends Controller
{
    //
    public function index ()
    {
      $lists = Todo::all();
      $done_lists = DoneTodo::all();
      
      return view('todo.index', ['lists' => $lists, 'done_lists' => $done_lists]);
    }
    
    public function add ()
    {
      return view('todo.create');
    }
    
    public function create (Request $request)
    {
      $this->validate($request, Todo::$rules);
      
      $todo = new Todo;
      $form = $request->all();
      
      unset($form['_token']);
      
      $todo->fill($form)->save();
      
      return redirect('/');
    }
    
    public function edit (Request $request) 
    {
      $todo = Todo::find($request->id);
      if (empty($todo)) {
        abort(404);
      }
      return view('todo.edit', ['todo' => $todo]);
    }
    
    public function update (Request $request)
    {
      $this->validate($request, Todo::$rules);
      
      $todo = Todo::find($request->id);
      $form = $request->all();
    
      unset($form['_token']);
    
      $todo->fill($form)->save();
    
      return redirect('/');
    }
  
    public function done (Request $request)
    {
      $todo = Todo::find($request->id);
      $done_todo = new DoneTodo;
      
      $done_todo->todo = $todo->todo;
      $done_todo->save();
      
      $todo->delete();
      
      return redirect('/');
    }
    
    public function delete (Request $request)
    {
      $todo = DoneTodo::find($request->id);
      $todo->delete();
      
      return redirect('/');
    }
    
    public function allDelete ()
    {
      DoneTodo::truncate();
      
      return redirect('/');
    }
}
