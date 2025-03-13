@extends('layouts.main_layout')
@section('title', 'Login')

@section('content')
    @if (session('email_or_password_invalid'))
        {{session('email_or_password_invalid')}}
    @endif
    <form action="{{ route('login.submit') }}" method="post">
        @csrf

        <label for="email">E-mail</label>
        <input type="email"name="email">
        <br>
        <label for="password">Senha</label>
        <input type="text"name="password">
        <br><br>
        <input type="submit"value="LOGIN">
        <br><br>
        <a href="{{ route('register') }}">Ainda não tem conta ?</a>
    </form>
@endsection
