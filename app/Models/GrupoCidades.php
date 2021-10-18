<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoCidades extends Model
{
    use HasFactory;
    protected $fillable = [
        'grupo_cidade',
    ];

    function cidades (){
        return $this->hasMany(Cidades::class, 'id');
    }
}
