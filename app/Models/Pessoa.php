<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'tipoPessoa', 'endereco', 'complemento', 'bairro', 'cidade', 'estado', 'email', 'telefone'];

}
