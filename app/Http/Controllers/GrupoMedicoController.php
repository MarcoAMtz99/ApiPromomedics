<?php

namespace App\Http\Controllers;
use App\agenda;
use App\Paciente;
use Carbon\Carbon;
use App\grupoMedico;
use Illuminate\Http\Request;

class GrupoMedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $grupoMedico = new grupoMedico;

        $grupoMedico->nombre='';
        $grupoMedico->responsable='';
        $grupoMedico->estado='';
        $grupoMedico->telefono='';
        $grupoMedico->fotografia='';
        $grupoMedico->otro_telefono='';
        $grupoMedico->celular='';
        $grupoMedico->num_medicos='';
        $grupoMedico->giro='';
        $grupoMedico->slogan='';
        $grupoMedico->status='';

        $grupoMedico-save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\grupoMedico  $grupoMedico
     * @return \Illuminate\Http\Response
     */
    public function show(grupoMedico $grupoMedico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\grupoMedico  $grupoMedico
     * @return \Illuminate\Http\Response
     */
    public function edit(grupoMedico $grupoMedico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\grupoMedico  $grupoMedico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, grupoMedico $grupoMedico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\grupoMedico  $grupoMedico
     * @return \Illuminate\Http\Response
     */
    public function destroy(grupoMedico $grupoMedico)
    {
        //
    }
}
