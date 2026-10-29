<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brinquedos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'quantidade',
        'preço',
        'estoque_minimo'
    ];
}
