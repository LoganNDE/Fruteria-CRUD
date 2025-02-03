<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fruteria extends Model
{
    protected $table = 'frutas';
    protected $fillable = ['id', 'nombre', 'imagen', 'temporada', 'precio', 'stock'];
}
