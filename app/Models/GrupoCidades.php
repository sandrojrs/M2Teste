<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoCidades extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'grupo_cidade',
    ];

    function cidades (){
        return $this->hasMany(RelacaoGrupoCidade::class, 'grupo_cidades_id')->select(['id','grupo_cidades_id']);
    }
}
