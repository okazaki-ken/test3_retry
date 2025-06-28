@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/log.css')}}">
@endsection

@section('content')
<form action="/log" method="post">
  @csrf
  <table>
    <tr>
      <th>日付<span class="require">必須</span></th>
      <td><input type="data" name="date" value="{{ date('Y-m-d') }}"></td>
    </tr>
    <tr>
      <th>体重<span class="require">必須</span></th>
      <td><input type="text" name="weight" ></td>
    </tr>
    <tr>
      <th>摂取カロリー<span class="require">必須</span></th>
      <td><input type="text" name="calories" ></td>
    </tr>
    <tr>
      <th>運動時間<span class="require">必須</span></th>
      <td><input type="time" name="exercise_time" ></td>
    </tr>
    <tr>
      <th>運動内容</th>
      <td><input type="text" name="exercise_content" ></td>
    </tr>
    <tr>
      <th></th>
      <td><button>送信</button></td>
    </tr>
  </table>
</form>

@endsection