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
        <table class="table table-light table-striped">
          <thead>
            <th class="text-left" width="70%">～ ToDo ～</th>
            <th width="15%">Edit</th>
            <th width="15%">Done</th>
          </thead>
          <tbody>  
            @foreach ($lists as $list)
              <tr>
                <td>・ {{ $list->todo }}</td>
                <td>
                  <div>
                    <a href="{{ action('TodoController@edit', ['id' => $list->id]) }}">編集</a>
                  </div>
                </td>
                <td>
                  <div>
                    <a href="{{ action('TodoController@delete', ['id' => $list->id]) }}">削除</a>
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