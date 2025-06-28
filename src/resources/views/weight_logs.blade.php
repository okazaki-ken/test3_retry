@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/logs.css')}}">
@endsection

@section('content')

@php
    $latestLog = $weightlogs->sortByDesc('date')->first();
@endphp

<div class="top">
    <div class="top__goal">
        <div class="top__text">目標体重</div>
        <div class="top__weight">
            {{$weighttarget ->target_weight}} kg
        </div>
    </div>

    <div class="top__next">
        <div class="top__text">目標まで</div>
        <div class="top__weight">
        {{ $weighttarget->target_weight - $latestLog->weight }}kg
        </div>
    </div>

    <div class="top__now">
        <div class="top__text">最新体重</div>
        <div class="top__weight">
            {{$latestLog -> weight}}kg
        </div>
    </div>
</div>

<div class="list">
    <div class="list__header">
        <div class="list__header--find"></div>
        <div class="list__header--add">
            <a href="log">
                <button class="list__header--button">データ追加</button>
            </a>
        </div>


    </div>

    <table>
        <tr>
            <th>日付</th>
            <th>体重</th>
            <th>食事摂取カロリー</th>
            <th>運動時間</th>
            <th></th>
        </tr>
        @foreach($weightlogs as $weightlog)
        <tr>
            <td>{{$weightlog->created_at}}</td>
            <td>{{$weightlog->weight}}</td>
            <td>{{$weightlog->calories}}</td>
            <td>{{$weightlog->exercise_content}}</td>
            <td></td>            
        </tr>
        @endforeach
    </table>
</div>

@endsection