@extends('layouts.main_layout')
@section('title', "Home")

@section('content')

    <div class="card p-3">
        <a href="#">Meus Dados</a>
    </div>
    <div class="card p-3">
        <a href="#">Minhas consultas</a>
    </div>
    <div class="card p-3">
        <a href="#">Marcar uma consulta</a>
    </div>
    
@endsection


















{{-- @if(session('user'))
    <h1>{{ session('user')->name }}</h1>
@endif --}}
