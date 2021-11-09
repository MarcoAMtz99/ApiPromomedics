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
        $grupoMedico = grupoMedico::all();
        return json_encode($grupoMedico); 
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
        
       /*  $grupoMedico = new grupoMedico(); */
     /*    $Fecha = Carbon::now();
        $grupoMedico->nombre=$request->data["nombre"];
        $grupoMedico->responsable=$request->data["apellido"];
        $grupoMedico->estado=$request->data["sexo"];
        $grupoMedico->telefono=$request->data["celular"];
        $grupoMedico->fotografia="";
        $grupoMedico->otro_telefono=$request->data["celular"];
        $grupoMedico->celular=$request->data["celular"];
        $grupoMedico->num_medicos=0;
        $grupoMedico->giro=$request->data["mat"];
        $grupoMedico->slogan=$request->data["responsable"];
        $grupoMedico->status=1;
        /* $grupoMedico->updated_at=$Fecha;
        $grupoMedico->created_at=$Fecha; */ 

       /*  $grupoMedico->save(); */
        return json_encode( array('msg'=>"se guardo correctamente",$request->data) ) ;
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
