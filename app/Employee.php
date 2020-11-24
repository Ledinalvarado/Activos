<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;

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
