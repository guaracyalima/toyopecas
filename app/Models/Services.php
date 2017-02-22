<?php

namespace Toyopecas\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Services extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'titulo',
        'texto',
        'img'
    ];

}
