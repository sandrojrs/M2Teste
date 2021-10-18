<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescontoProdutoCampanha extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'desconto_produto_campanha', 'campanha_id'
    ];

    function campanha (){
        return $this->hasOne(CampanhaGrupoCidades::class, 'id');
    }

}
