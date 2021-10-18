<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelacaoGrupoCidade extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $rules = [
        'cidade_id' => 'required|number|unique:relacao_grupo_cidades',
    ];

    protected $fillable = [
        'grupo_cidades_id','cidade_id'
    ];

    function cidade (){
        return $this->hasOne(Cidades::class, 'id');
    }


}
