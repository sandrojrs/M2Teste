<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidades extends Model
{
    use HasFactory;

    protected $fillable = [
        'cidade',
    ];

    public $timestamps = false;

}
