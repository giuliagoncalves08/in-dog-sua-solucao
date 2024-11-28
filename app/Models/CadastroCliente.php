<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class CadastroCliente extends Authenticatable
{
   use Notifiable;

   protected $fillable = [
    'nome', 'cpf', 'email', 'telefone', 'password', 'sexo'
   ];

   protected $hidden = [
    'password', 'remember_token'
   ];
}
