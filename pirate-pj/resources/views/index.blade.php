@extends('layout.default')

@section('content')
<table>
  <tr>
    <th>名前</th>
    <th>年齢</th>
    <th>出身地</th>
    <th>悪魔の実</th>
  </tr>
  @foreach ($members as $member)
  <tr>
    <td><input type="text" name="name" value="{{$member->name}}"></td>
    <td><input type="text" name="age" value="{{$member->age}}"></td>
    <td><input type="text" name="nationality" value="{{$member->nationality}}"></td>
    <td><input type="text" name="ability" value="{{$member->ability}}"></td>
    <form action="/edit" method="post">
      @csrf
      <td>
        <button>編集</button>
      </td>
    </form>
    <form action="/delete" method="post">
      <td><button>削除</button></td>
    </form>
  </tr>
  @endforeach
</table>

  <form action="/add" method="post">
    @csrf
    <table>
      <tr>
        <th>名前</th>
        <th>年齢</th>
        <th>出身地</th>
        <th>悪魔の実</th>
      </tr>
      <tr>
        <td><input type="text" name="name"></td>
        <td><input type="text" name="age"></td>
        <td><input type="text" name="nationality"></td>
        <td><input type="text" name="ability" value="なし"></td>
        <td><input type="submit"></td>
      </tr>
    </table>
  </form>
  @if(count($errors)>0)
  <h2>入力エラー</h2>
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
  @endif

  @endsection
