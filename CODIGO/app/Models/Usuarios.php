<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable = ['nombres', 'apellidos', 'email'];

    public function reservas()
    {
        return $this->hasMany('App\Models\Butacas');
    }
}
