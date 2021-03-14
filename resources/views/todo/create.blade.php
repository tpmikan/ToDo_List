@extends('layouts.todo')

@section('title', 'ToDo作成')
@section('content')
  <div class="container">
    
    <div class="row">
      <div class="mx-auto">
        <h1 class="pt-5">ToDo 作成</h1>
      </div>
    </div>
    
    <form action="{{ action('TodoController@create') }}" method="post">
      <div class="col-md-8 mx-auto pt-4">
        <div class="row">
          <div class="col-md-2">
            <p class="text-center">ToDo</p>
          </div>
          <div class="col-md-8">
            <input type="text" class="form-control" name="todo" maxlength="30" value="{{ old('todo') }}">
          </div>
        </div>
      </div>
      {{ csrf_field() }}
      <input type="submit" class="btn btn-primary" value="作成">
    </form>
    
  </div>
@endsection