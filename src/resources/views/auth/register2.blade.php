@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register2.css')}}">
@endsection

@section('content')
<div class="header">
    <h2>新規会員登録</h2>
    <div class="header__account">STEP2 体重データの入力</div>    
</div>

<div class="input">
    <form action="/register/step2" method="post">
    @csrf
        <div class="input__text">
            現在の体重
        </div>
        <div class="input__form">
            <input type="text" name="weight" value="{{ old('weight') }}">
            kg
        </div>
        <div class="input__error">
            @error('weight')
            {{ $message}}
            @enderror
        </div>

        <div class="input__text">
            目標体重
        </div>
        <div class="input__form">
            <input type="text" name="target_weight" value="{{ old('target_weight') }}">
        </div>
        <div class="input__error">
            @error('target_weight')
            {{ $message}}
            @enderror
        </div>        

        <div class="input__button">
            <button class="input__button-submit" type="submit">
                アカウント作成
            </button>
        </div>
    </form>

</div>
@endsection