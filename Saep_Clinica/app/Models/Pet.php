<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets';

    protected $fillable = [
        'raça',
        'marca',
        'modelo',
        'tutor_id',
    ];

    public $timestamps = true;

    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }
}