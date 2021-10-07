<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    //
    protected $table ='agenda'; 
    protected $fillable = [
            'ID',
            'id_medico',
            'status',
            'fechaCreacion',
            'fechaActualizacion',
            'usuarioCreacionId',
            'usuarioActualizacionId',
            'id_consultorio',
            'paciente',
            'fecha_consulta',
            'hora_consulta',
            'aseguradora',
            'mail',
            'telefono1',
            'telefono2',
            'telefono3',
            'consultaPrimeraVez',
            'consultaSubsecuente',
            'consultaPreferencial1',
            'consultaPreferencial2',
            'consultaRevision',
            'consultaEstudios',
            'consultaUrgencia',
            'costoConsulta',
            'recado',
            'comoSeEntero',
            'edad',
            'tutor'
    ];
}
