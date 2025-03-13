@extends('layouts.main_layout')
@section('title', "Home")

@section('content')

@if(session('user'))
    @php
        $user = session('user');
    @endphp

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Campo</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nome</td>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <td>Endereço</td>
                <td>{{ $user->endereco }}</td>
            </tr>
            <tr>
                <td>Número da Casa</td>
                <td>{{ $user->num_casa }}</td>
            </tr>
            <tr>
                <td>CEP</td>
                <td>{{ $user->cep }}</td>
            </tr>
            <tr>
                <td>Número SUS</td>
                <td>{{ $user->num_sus }}</td>
            </tr>
            <tr>
                <td>CPF</td>
                <td>{{ $user->cpf }}</td>
            </tr>
            <tr>
                <td>RG</td>
                <td>{{ $user->rg }}</td>
            </tr>
            <tr>
                <td>Telefone</td>
                <td>{{ $user->telefone ?? 'Não informado' }}</td> <!-- Caso seja null, exibe 'Não informado' -->
            </tr>
            <tr>
                <td>Celular</td>
                <td>{{ $user->celular }}</td>
            </tr>
        </tbody>
    </table>
@endif

@endsection
