<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Active extends Model
{

    use SoftDeletes;

    protected $fillable =
        [
            'nombre',
            'descripcion',
            'fecha_ingreso',
            'foto',
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
