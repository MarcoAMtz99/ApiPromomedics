<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    //
    protected $table ='registros'; 
    protected $fillable = [
            'nombre',
            'apellidos',
            'celular',
            'correo',
            'telefono',
            'empresa',
            'puesto'
    ];
}
