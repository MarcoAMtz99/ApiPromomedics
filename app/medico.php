<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
    //
    protected $table ='medico'; 
    protected $fillable = [
        'ID',
    	' nombre',
        ' paterno',
        ' materno',
        ' sexo',
        ' nacimiento_fecha',
        ' nacionalidad',
        ' nacimiento_lugar',
        ' rfc',
    	' calle',
        ' num_exterior',
        ' num_interior',
        ' num_piso',
        ' id_cp',
        ' fotografia',
        ' num_cedula',
        ' num_recer',
        ' fecha_recer',	
        ' status',
        ' fechaCreacion',
        ' fechaActualizacion',
        ' usuarioCreacionId',
        ' usuarioActualizacionId',
        ' tipoMedico',
        ' giro',
        ' slogan',
        ' fk_grupo',
        ' medios_digitales',
        ' servicios',
        ' archivos',
        ' video'
    ];
    

}
