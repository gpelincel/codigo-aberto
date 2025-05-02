<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Projeto extends Model
{
    protected $fillable = [
        'title',
        'description',
        'content',
        'id_ong'
    ];

    public function ong(): BelongsTo{
        return $this->belongsTo(ONG::class, 'id_ong');
    }
}
