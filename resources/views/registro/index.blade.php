@extends('home')
@section('content')
    
    @if (session()->has('status'))
    <div class="alert alert-success">{{session('status')}}
            </div>
        @endif
    <a href=" {{route('export2')}}" class="btn btn-primary">Exportar Excel</a>
   <div class="container">
    <h2>Todos los registros</h2>
    <table class="table table-bordered">
        <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>celular</th>
        <th>correo</th>
        <th>telefono</th>
        <th>empresa</th>
        <th>puesto</th>
        </tr>
       
    @foreach ($registro as $registros)
    <tr>
        <td>{{$registros->id}} </td>
        <td>{{$registros->nombre}} </td>
        <td>{{$registros->apellidos}} </td>
        <td>{{$registros->celular}} </td>
        <td>{{$registros->correo}} </td>
        <td>{{$registros->telefono}} </td>
        <td>{{$registros->empresa}} </td>
        <td>{{$registros->puesto}} </td>
       
    </tr>
    @endforeach
</table>
   </div>

@endsection