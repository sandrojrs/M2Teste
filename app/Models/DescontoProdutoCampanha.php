<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescontoProdutoCampanha extends Model
{
    use HasFactory;
    protected $fillable = [
        'desconto_produto_campanha'
    ];

    function campanha (){
        return $this->hasOne(CampanhaGrupoCidades::class, 'id');
    }

}
