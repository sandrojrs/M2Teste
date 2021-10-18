<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampanhaGrupoCidades extends Model
{
    use HasFactory;

    protected $fillable = [
        'campanha_grupo_cidade',
    ];

    function grupoCidades (){
        return $this->hasMany(GruposCidades::class, 'id');
    }
    function produtos (){
        return $this->hasMany(Produtos::class, 'id');
    }

}
