<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informacoes extends Model
{
    use HasFactory;
    protected $fillable = [
        'idade',
        'logradouro',
        'telefone_primario',
        'telefone_secundario',
        'complemento',
        'cidade',
        'estado',
        'pais'
    ];
}
