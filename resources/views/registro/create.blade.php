@extends('master')
@section('content')
<div class="card w-95">
    <div class="row justify-content-center">
            <div class="col-md-9">
                <h5 class="sub-heading-1 text-center-xs">Registro</h5>
              
                @if (session()->has('status'))
            <div class="alert alert-success">{{session('status')}}
                    </div>
                @endif 
                <form action="{{route('registro.store')}}" method="POST">
                    <div class="col-sm-6 col-xs-12">
                         <div class="form-group">
                                <input type="text" name="nombre" id="nombre "class="form-control" value="{{old('nombre')}}"         placeholder="Nombre">
                                <span class="help-block">{{$errors->first('nombre')}} </span>
                            </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                    <input type="text" name="apellidos" class="form-control" value="{{old('apellidos')}}" placeholder="Apellidos">      
                                    <span class="help-block">{{$errors->first('apellidos')}} </span>
                            </div>
                    </div>
                        <div class="col-sm-6 col-xs-12">                      
                    <div class="form-group">
                        <input type="number" name="celular" class="form-control" value="{{old('celular')}}" placeholder="Celular / Whatsapp">
                        <span class="help-block">{{$errors->first('celular')}} </span>
                    </div>
                        </div> 
                        <div class="col-sm-6 col-xs-12"> 
                    <div class="form-group">
                        <input type="text" name="correo" class="form-control" value="{{old('correo')}}" placeholder="Correo electronico">
                        <span class="help-block">{{$errors->first('correo')}} </span>
                    </div>
                        </div>  
                        <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <input type="number" name="telefono" class="form-control" value="{{old('telefono')}}" placeholder="Telefono">
                        <span class="help-block">{{$errors->first('telefono')}} </span>
                    </div>
                        </div>
                        <div class="col-sm-6 col-xs-12"> 
                    <div class="form-group">
                        <input type="text" name="empresa" class="form-control" value="{{old('empresa')}}" placeholder="Nombre de la empresa">
                        <span class="help-block">{{$errors->first('empresa')}} </span>
                    </div>
                        </div>
                        <div class="col-sm-12 "> 
                    <div class="form-group">
                        <input type="text" name="puesto" class="form-control" value="{{old('puesto')}}" placeholder="Puesto en el que esta interesado">
                        <span class="help-block">{{$errors->first('puesto')}} </span>
                    </div>
                         </div>                 
                        <div class="col-sm-12 col-xs-12"> 
                    <div class="form-group">
                        <input type="submit" value="Enviar registro" class="btn btn-primary">
                    </div>
                    {{ csrf_field()}}
                         </div>              
                </form>



            </div> 
        
    </div>
</div>
          
@endsection