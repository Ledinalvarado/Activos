<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Company extends Model
{
    //
    use SoftDeletes;

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
