<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampanhaGrupoCidades extends Model
{
    use HasFactory;

    protected $fillable = [
        'campanha_grupo_cidade','grupo_cidades_id','produto_id', 'user_id'
    ];

    public $timestamps = false;

    function grupoCidades (){
        return $this->hasMany(GrupoCidades::class, 'id')->select(['id']);
    }
    function produtos (){
        return $this->hasMany(Produtos::class, 'id');
    }
    function desconto (){
        return $this->hasOne(DescontoProdutoCampanha::class, 'campanha_id');
    }
    function users (){
        return $this->hasOne(User::class, 'id');
    }

}
