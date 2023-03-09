<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'foto',
        'cidade',
        'marca',
        'modelo',
        'descricao',
        'ano',
        'quilometragem',
        'cambio',
        'telefone',
        'valor',
    ];
}
