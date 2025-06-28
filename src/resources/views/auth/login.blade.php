@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css')}}">
@endsection

@section('content')
<div class="header">
    <h2>ログイン</h2>
</div>

<div class="input">
    <form action="/login" method="post">
        @csrf

        <div class="input__text">
            メールアドレス
        </div>
        <div class="input__form">
            <input type="text" name="email" value="{{ old('email') }}">
        </div>
        <div class="input__error">
            @error('email')
            {{ $message}}
            @enderror
        </div>

        <div class="input__text">
            パスワード
        </div>
        <div class="input__form">
            <input type="password" name="password">
        </div>
        <div class="input__error">
            @error('password')
            {{ $message}}
            @enderror
        </div>

        <div class="input__button">
            <button class="input__button-submit" type="submit">
                 ログイン
            </button>
        </div>
    </form>

    <div class="loguin">
        <a href="/register/step1" class="loguin__link">アカウント作成はこちら</a>
    </div>
</div>

@endsection