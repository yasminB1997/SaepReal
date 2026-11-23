<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table = 'tutores';

    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'email',
    ];

    protected $hidden = [
        'cpf',
    ];

    public $timestamps = true;
}