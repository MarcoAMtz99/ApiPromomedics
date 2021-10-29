<?php

namespace App\Http\Controllers;
use App\agenda;
use App\Paciente;
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
            'id'=>$item->ID,
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
     /*    dd($request,$request->data["paciente"]); */
        $PACIENTE_NOMBRE = Paciente::where('id_paciente',$request->data["paciente"])->value('nombre');
        $PACIENTE_PATERNO = Paciente::where('id_paciente',$request->data["paciente"])->value('paterno');
        $PACIENTE_MATERNO = Paciente::where('id_paciente',$request->data["paciente"])->value('materno');
       
        $nombre = $PACIENTE_NOMBRE.' '.$PACIENTE_PATERNO.' '.$PACIENTE_MATERNO;
        /* return json_encode( $nombre ) ;  */
        $Fecha = Carbon::now();
        $CITA = new Agenda();
        $aux= $request->data["hora"].":00";
        
        $CITA->id_medico = $request->data["medico"];
        $CITA->status = 1;
        $CITA->fechaCreacion =  $Fecha;
        $CITA->fechaActualizacion =  $Fecha;
        $CITA->usuarioCreacionId = 1;
        $CITA->usuarioActualizacionId = 1;
        $CITA->id_consultorio = $request->data["consultorio"];
        $CITA->paciente = $nombre;
        $CITA->fecha_consulta = $request->data["fecha"];
        $CITA->hora_consulta = $aux;
        $CITA->aseguradora = 'GNP';
        $CITA->mail = 'prueba@prueba.com';
        $CITA->telefono1 = $request->data["telefono1"];
        $CITA->telefono2 = $request->data["telefono2"];
        $CITA->telefono3 = $request->data["telefono3"];
        $CITA->consultaPrimeraVez = 0;
        $CITA->consultaSubsecuente = 0;
        $CITA->consultaPreferencial1 = 0;
        $CITA->consultaPreferencial2 = 0;
        $CITA->consultaRevision = 0;
        $CITA->consultaEstudios = 0;
        $CITA->consultaUrgencia = 0;
        $CITA->costoConsulta = $request->data["costo"];
        $CITA->recado = $request->data["recado"];
        $CITA->comoSeEntero = "internet";
        $CITA->edad = $request->data["edad"];
        $CITA->tutor = "PRUEBA";
        $CITA->save();

        return json_encode( array('msg'=>"se guardo correctamente") ) ;
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
       /*  $agenda = Agenda::all(); */
       $CITA = Agenda::findOrFail($request->data["id_cita"]);
        
       $CITA->edad =$request->data["id_cita"];
       $CITA->recado=$request->data["recado"];
       $CITA->costoConsulta=$request->data["costo"];
       $CITA->telefono1=$request->data["telefono1"];
       $CITA->telefono2=$request->data["telefono2"];
       $CITA->telefono3=$request->data["telefono3"];

        $CITA->save();
    

  
        return   json_encode( array('msg'=>"se actualizo correctamente") ) ;;
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
