<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ONG extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'area_atuacao',
        'descricao'
    ];

    public $table = 'ongs';
}
