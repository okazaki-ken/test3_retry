@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

@section('content')
<div class="header">
    <h2>新規会員登録</h2>
    <div class="header__account">STEP1 アカウント情報の登録</div>    
</div>

<div class="input">
    <form action="/register/step1" method="post">
    @csrf
        <div class="input__text">
            お名前
        </div>
        <div class="input__form">
            <input type="text" name="name" value="{{ old('name') }}">
        </div>
        <div class="input__error">
            @error('name')
            {{ $message}}
            @enderror
        </div>

        <div class="input__text">
            メールアドレス
        </div>
        <div class="input__form">
            <input type="email" name="email" value="{{ old('email') }}">
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
                 次に進む
            </button>
        </div>
    </form>

    <div class="loguin">
        <a href="/login" class="loguin__link">ログインはこちら</a>
    </div>
</div>

@endsection