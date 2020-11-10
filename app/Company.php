<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Company extends Model
{
    //
    protected $fillable = ['nombre', 'ubicacion'];

    public function users(){
        return $this->hasMany('App\User');
    }

    public function employees(){
        return $this->hasMany('App\Employee');
    }

    public function actives(){
        return $this->hasMany('App\Active');
    }

}
