<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = [
        'title',
        'description',
        'content',
        'id_ong'
    ];
}
