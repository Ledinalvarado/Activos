<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    //
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
