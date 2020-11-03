<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Active extends Model
{
    //
    protected $fillable =
        [
            'nombre',
            'descripcion',
            'encargado',
        ];

}
