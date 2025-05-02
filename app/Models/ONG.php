<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ONG extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'telefone',
        'area_atuacao',
        'descricao'
    ];

    public $table = 'ongs';

    public function projetos() : HasMany{
        return $this->hasMany(Projeto::class, 'id_ong', 'id');
    }

    public function social_medias(): HasMany{
        return $this->hasMany(SocialMedia::class, 'id_ong');
    }
}
