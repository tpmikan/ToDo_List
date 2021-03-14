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
        <a href="{{ action('TodoController@add') }}" role="button" class="btn btn-primary">ToDo作成</a>
      </div>
    </div>
    <div class="col-md-8 mx-auto pt-4">
      <div class="row">
        <table class="table">
          <thead>
            <th class="text-center" width="80%">ToDo</th>
            <th width="20%">Done</th>
          </thead>
          <tbody>  
            @foreach ($lists as $list)
              <tr>
                <td>{{ $list->todo }}</td>
                <td>
                  <div>
                    <a>削除</a>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
@endsection  