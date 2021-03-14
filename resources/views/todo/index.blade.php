@extends('layouts.todo')

@section('title', 'ToDo List')
@section('content')
  <div class="container">
    <div class="row">
      <div class="mx-auto pt-5">
        <h1 class="pt-2">ToDo List</h1>
      </div>
    </div>
    <div class="row">
      <div class="mx-auto">
        <a href="{{ action('TodoController@create') }}" role="button" class="btn btn-primary">ToDo作成</a>
      </div>
    </div>
    
  </div>
  
@endsection  