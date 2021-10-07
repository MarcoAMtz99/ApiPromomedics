<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consultorio extends Model
{
    //
    protected $table ='consultorio'; 
    protected $fillable = [
        'ID',
        ' id_medico',
        ' nombre',
        ' estado',
        ' calle',
        ' exterior',
        ' interior',
        ' codigo_postal',
        ' colonia',
        ' status',
        ' fechaCreacion',
        ' fechaActualizacion',
        ' ciudad',
        ' municipio',
        ' consultaPrimera',
        ' consultaSubsecuente',
        ' consultaPreferente',
        ' giro',
        ' slogan'
    ];
}


