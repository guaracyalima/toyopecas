<?php

namespace Toyopecas\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Sobre extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'principal',
        'missao',
        'visao',
        'img'
    ];

}
