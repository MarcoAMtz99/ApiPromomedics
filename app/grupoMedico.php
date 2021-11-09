<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grupoMedico extends Model
{
    //
    /* protected $timestamps = false; */
     protected $table ='grupo_medico'; 
    protected $fillable = [
        'ID',
        ' nombre',
        ' responsable',
        ' estado',
        ' telefono',
        ' fotografia',
        ' otro_telefono',
        ' celular',
        ' num_medicos',
        ' giro',
        ' slogan',
        ' status',
        'updated_at',
        'created_at'        
    ];
}
