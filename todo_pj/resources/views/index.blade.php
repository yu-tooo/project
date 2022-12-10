<style>
  table {
    width:100%;
    text-align:center;
    margin-bottom:30px;
  }
  .table {
    width:100%;
    border-radius:5px;
  }
  .create {
    height:40px;
    font-size:20px;
  }
  .task {
    height:27px;
    font-size:16px;
  }
  .button {
    padding:5px 10px;
    font-weight:bold;
    background-color:white;
    border-radius:4px;
  }
  .add {
    color:#ff6c94;
    border:2px solid #ff6c94;
  }
  .renew {
    color:#f5a500;
    border:2px solid #f5a500;
  }
  .delete {
    color:#92cb97;
    border:2px solid #92cb97;
  }
  .created_at {
    font-size:14px;
  }
</style>
@extends('layouts.default')
@section('contents')
<h1>Todo List</h1>
<form action="/add" method="post">
  @csrf
    <table>
      <tr>
        <td><input class="create table" type="text"></td>
        <td><button class="add button">追加</button></td>
      </tr>
    </table>
</form>
@if(count($errors))
@error('task')
{{$message}}
@enderror
@endif
<table cellspacing="10">
  <tr class="table--head">
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  <tr></tr>
  @foreach ($todos as $todo)
  <form action="/edit?id={{$todo->id}}" method="post">
  @csrf
  <tr>
    <td class="created_at">{{$todo->created_at}}</td>
      <td><input class="task table" type="text" name="retask" value="{{$todo->task}}"></td>
      <td><button class="renew button">更新</button></td>
    </form>
    <form action="/delete?id={{$todo->id}}" method="post">
    <td><button class="delete button">削除</button></td>
    </form>
  </tr>
  @endforeach
</table>
@endsection