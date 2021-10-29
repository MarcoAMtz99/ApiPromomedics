<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $table ='paciente'; 
    protected $fillable = [
        'id_paciente',
        'nombre',
        'paterno',
        'materno',
        'nacimiento',
        'edad',
        'tutor',
        'tutor_nacimiento',
        'tutor_edad',
        'email',
        'telefono',
        'password',
        'facebook',
        'sexo',
        'pais',
        'estado',
        'estado_civil',
        'hijos',
        'escolaridad',
        'ocupacion',
        'servicio_medico',
        'gastos_medicos',
        'comentarios',
        'recibe_informacion',
        'intereses',
        'status'
    ];
}
