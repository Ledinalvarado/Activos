<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transfer extends Model
{
    //
    use SoftDeletes;

    protected $fillable = ['fecha_traspaso', 'descripcion', 'observacion'];


    public function actives(){
        return $this->belongsTo('App\Active');
    }

    public function encargado(){
        return $this->belongsTo('App\Employee');
    }

    public function imagenes(){
        return $this->hasMany('App\Images');
    }
}
