@extends(layout,default)

@section('content')
<table>
  <tr>
    <th>名前</th>
    <th>年齢</th>
    <th>出身地</th>
  </tr>
  @foreach $members as $member
  <tr>
    <td>{{$member->name}}</td>
    <td>{{$member->age}}</td>
    <td>{{$member->nationality}}</td>
  </tr>
  @endforeach
  
  @endsection

</table>