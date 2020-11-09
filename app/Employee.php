<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable =
        [
            'nombre',
            'telefono',
            'email',

        ];

    public function companyEmployee(){
        return $this->belongsTo('App\Company');
    }

    public function transfers(){
        return $this->hasMany('App\Transfer');
    }
}
