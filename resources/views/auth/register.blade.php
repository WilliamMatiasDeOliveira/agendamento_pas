@extends('layouts.main_layout')
@section('title', 'Register')

@section('content')

@if (session('register_error'))
    <div class="alert-danger text-center">
        {{session('register_error')}}
    </div>
@endif

<form action="{{ route('register.submit') }}" method="post">
    @csrf

    <label for="name">Nome completo</label>
    <input type="text"name="name"value="{{old('name')}}">
    @error('name')
        <div class="text-danger">
            {{$message}}
        </div>
    @enderror
    <br>
    <label for="email">E-mail</label>
    <input type="email"name="email"value="{{old('email')}}">
    @error('email')
        <div class="text-danger">
            {{$message}}
        </div>
    @enderror
    <br>
    <label for="password">Senha</label>
    <input type="password"name="password"value="{{old('password')}}">
    @error('password')
        <div class="text-danger">
            {{$message}}
        </div>
    @enderror
    <br>
    <label for="password_confirmation">Confirmar Senha</label>
    <input type="password"name="password_confirmation"value="{{old('password_confirmation')}}">
    @error('password_confirmation')
        <div class="text-danger">
            {{$message}}
        </div>
    @enderror
    <br>
    <label for="endereco">Endereço</label>
    <input type="text"name="endereco"value="{{old('endereco')}}">
    @error('endereco')
        <div class="text-danger">
            {{$message}}
        </div>
    @enderror
    <br>
    <label for="num_casa">Numero da casa (apto)</label>
    <input type="text"name="num_casa"value="{{old('num_casa')}}">
    @error('num_casa')
        <div class="text-danger">
            {{$message}}
        </div>
    @enderror
    <br>
    <label for="cep">Cep</label>
    <input type="text"name="cep"value="{{old('cep')}}">
    @error('cep')
        <div class="text-danger">
            {{$message}}
        </div>
    @enderror
    <br>
    <label for="num_sus">Numero do SUS</label>
    <input type="text"name="num_sus"value="{{old('num_sus')}}">
    @error('num_sus')
        <div class="text-danger">
            {{$message}}
        </div>
    @enderror
    <br>
    <label for="cpf">CPF</label>
    <input type="text"name="cpf"value="{{old('cpf')}}">
    @error('cpf')
        <div class="text-danger">
            {{$message}}
        </div>
    @enderror
    <br>
    <label for="rg">RG</label>
    <input type="text"name="rg"value="{{old('rg')}}">
    @error('rg')
        <div class="text-danger">
            {{$message}}
        </div>
    @enderror
    <br>
    <label for="telefone">Telefone</label>
    <input type="text"name="telefone"value="{{old('telefone')}}">
    @error('telefone')
        <div class="text-danger">
            {{$message}}
        </div>
    @enderror
    <br>
    <label for="celular">Celular</label>
    <input type="text"name="celular"value="{{old('celular')}}">
    @error('celular')
        <div class="text-danger">
            {{$message}}
        </div>
    @enderror
    <br>

    <br><br>
    <input type="submit"value="REGISTRAR">
    <br><br>
    <a href="{{route('login')}}">Já tem uma conta ?</a>
</form>

@endsection
