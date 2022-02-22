<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animai extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_usuario',
        'id_situacao',
        'id_tipo',
        'id_exclusao',
        'id_porte',
        'name',
        'idade',
        'descricao',
        'castrado',
        'vacinas',
        'preco',
        'sexo',
        'foto'
    ];
}
