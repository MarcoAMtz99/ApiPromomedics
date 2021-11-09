<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->('id_medico'),
            $table->('status'),
            $table->('fechaCreacion'),
            $table->('fechaActualizacion'),
            $table->('usuarioCreacionId'),
            $table->('usuarioActualizacionId'),
            $table->('id_consultorio'),
            $table->('paciente'),
            $table->('fecha_consulta'),
            $table->('hora_consulta'),
            $table->('aseguradora'),
            $table->('mail'),
            $table->('telefono1'),
            $table->('telefono2'),
            $table->('telefono3'),
            $table->('consultaPrimeraVez'),
            $table->('consultaSubsecuente'),
            $table->('consultaPreferencial1'),
            $table->('consultaPreferencial2'),
            $table->('consultaRevision'),
            $table->('consultaEstudios'),
            $table->('consultaUrgencia'),
            $table->('costoConsulta'),
            $table->('recado'),
            $table->('comoSeEntero'),
            $table->('edad'),
            $table->('tutor')
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendas');
    }
}
