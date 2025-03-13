<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    protected $fillable = [
        'name',
        'email',
        'password',
        'endereco',
        'num_casa',
        'cep',
        'num_sus',
        'cpf',
        'rg',
        'telefone',
        'celular'
    ];
}
