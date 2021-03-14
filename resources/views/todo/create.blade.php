@extends('layouts.todo')

@section('title', 'ToDo作成')
@section('content')
  <div class="container">
    
    <div class="row">
      <div class="mx-auto">
        <h1 class="pt-5">ToDo 作成</h1>
      </div>
    </div>
    
    <div class="col-md-8 mx-auto pt-4">
      <div class="row">
        <div class="col-md-2">
          <p class="text-center">ToDo</p>
        </div>
        <div class="col-md-10">
          <input type="text" class="form-control" name="todo" value="">
        </div>
      </div>
    </div>
    
  </div>
@endsection