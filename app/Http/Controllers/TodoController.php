<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Todo;

class TodoController extends Controller
{
    //
    public function index ()
    {
      $lists = Todo::all();
      
      return view('todo.index', ['lists' => $lists]);
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
    
    public function delete (Request $request)
    {
      $todo = Todo::find($request->id);
      $todo->delete();
      
      return redirect('/');
    }
}
