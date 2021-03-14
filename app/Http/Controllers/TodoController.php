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
      
      $todo->fill($form);
      $todo->save();
      
      
      return redirect('/');
    }
}
