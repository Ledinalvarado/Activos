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
            'fecha_ingreso',
        ];

    public function companyActive()
    {
        return $this->belongsTo('App\Company');
    }

    public function transfers()
    {
       return $this->hasMany('App\Transfer');
    }

}
