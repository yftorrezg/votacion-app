<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votante extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombres',
        'apellidos',
        'numero_documento',
        'complemento',
        'email',
        'telefono',
    ];
}
