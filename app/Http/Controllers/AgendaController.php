<?php

namespace App\Http\Controllers;
use App\agenda;
use Carbon\Carbon;
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
       /*  dd($agenda); */
       foreach($agenda as $item){
        /* $date = Carbon::parse('2018-06-15 12:34:00', 'UTC'); */
        $nueva= $item->fecha_consulta." ".$item->hora_consulta;
       /*  $date2= Carbon::create($item->fecha_consulta,$item->hora_consulta); */
        $aux = array(
            'id'=>$item->id,
            'title'=>$item->paciente,
          /*   'start'=>$item->fecha_consulta, */
            'start'=>$nueva,
            'hora_consulta'=>$item->hora_consulta,
            'aseguradora'=>$item->aseguradora,
            'telefono1'=>$item->telefono1,
            'telefono2'=>$item->telefono2,
            'telefono3'=>$item->telefono3,
            'costoConsulta'=>$item->costoConsulta,
            'recado'=>$item->recado,
            'edad'=>$item->edad,
            'comoSeEntero'=>$item->comoSeEntero,
            'allDay'=>false,
            'completa'=> $nueva

        );

        array_push($Citas,$aux);
        }
        
         return json_encode($Citas); 
       
           
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
        /* dd($request); */
        return "Exito";
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
