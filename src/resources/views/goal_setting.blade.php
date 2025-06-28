@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/goal.css')}}">
@endsection

@section('content')
<form action="/wight_logs/goal_setting" method="post">
    @csrf
    <div class="main">
        <h2 class="main__logo">目標体重設定</h2>
        <form action="/wight_logs/goal_setting" method="post"></form>
        <div class="main__weigh">
            <input type="text" name="target_weight" value="{{$weighttarget->target_weight}}" >kg
        </div>

        <div class="main__button">
            <a href="/weight_logs">
                <button class="main__button--back">戻る</button>
            </a>
            <div class="main__button--update">
                <button type="submit">更新</button>
            </div>
        </div>

    </div>
</form>
@endsection