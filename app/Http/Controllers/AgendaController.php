<?php

namespace App\Http\Controllers;
use App\agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
        $agenda = Agenda::all();
        $Citas =[];
       foreach($agenda as $item){
        $aux = array(
            'id'=>$item->id,
            'title'=>$item->paciente,
            'start'=>$item->fecha_consulta,
            'hora_consulta'=>$item->hora_consulta,
            'aseguradora'=>$item->aseguradora,
            'telefono1'=>$item->telefono1,
            'telefono2'=>$item->telefono2,
            'telefono3'=>$item->telefono3,
            'costoConsulta'=>$item->costoConsulta,
            'recado'=>$item->recado,
            'edad'=>$item->edad,
            'comoSeEntero'=>$item->comoSeEntero

        );
        array_push($Citas,$aux);
        return json_encode($Citas);
        /* response()->json([ 'medicos' => $agenda], 200); */
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $agenda = Agenda::where('id_medico',$id)->get();
       /*  dd( $agenda,$id); */
       $Citas =[];
       foreach($agenda as $item){
        $aux = array(
            'id'=>$item->id,
            'title'=>$item->paciente,
            'start'=>$item->fecha_consulta,
            'hora_consulta'=>$item->hora_consulta,
            'aseguradora'=>$item->aseguradora,
            'telefono1'=>$item->telefono1,
            'telefono2'=>$item->telefono2,
            'telefono3'=>$item->telefono3,
            'costoConsulta'=>$item->costoConsulta,
            'recado'=>$item->recado,
            'edad'=>$item->edad,
            'comoSeEntero'=>$item->comoSeEntero

        );
        array_push($Citas,$aux);
       }
       
       return json_encode($Citas);
      /*   response()->json(['success' => true, 'medicos' => $agenda], 200); */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
