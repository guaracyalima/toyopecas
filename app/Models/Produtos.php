<?php

namespace Toyopecas\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Produtos extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'nome',
        'categoria',
        'preco',
        'img'
    ];

}
