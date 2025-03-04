<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // sistema de seguranca do proprio laravel onde é informado somente os campos que irão para o banco
    protected $fillable = [
        'name',
        'description',
        'price',
        'id_category',
        'image'
    ];
}
