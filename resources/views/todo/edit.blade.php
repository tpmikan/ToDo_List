@extends('layouts.todo')

@section('title', 'ToDo編集')
@section('content')
  <div class="container">
    
    <div class="row">
      <div class="mx-auto">
        <h1 class="pt-5">ToDo 編集</h1>
      </div>
    </div>
    
    <form action="{{ action('TodoController@update') }}" method="post">
     <div class="col-md-8 mx-auto pt-3">
        @if (count($errors) > 0)
          <ul class="list-unstyled">
            @foreach ($errors->all() as $e)
              <li class="text-center">～ {{ $e }} ～</li>
            @endforeach
          </ul>
        @endif
     </div>
      
      <div class="col-md-8 mx-auto pt-4">
        <div class="row">
          <div class="col-md-2">
            <p class="text-center">ToDo</p>
          </div>
          <div class="col-md-10">
            <div class="text-center">
              <div class="input-group input-group-lg">
                <input type="text" class="form-control" name="todo" maxlength="30" value="{{ $todo->todo }}" autocomplete="off">
              </div>
            </div>
          </div>
        </div>
      </div>
      <input type="hidden" name="id" value="{{ $todo->id }}">
      {{ csrf_field() }}
      <div class="col-md-8 mx-auto pt2">
        <div class="text-right">
          <input type="submit" class="btn btn-primary" value="更新">
        </div>
      </div>
    </form>
    
  </div>
@endsection