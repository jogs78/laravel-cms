@extends('maquetaciones.administracion')
@section('contenido')
<form action="{{route('validar')}}" method="post">
 @csrf
<label for='nombre_de_usuario'>nombre_de_usuario</label>
<input type='text' name='nombre_de_usuario' id='nombre_de_usuario'><br>
<label for='clave'>clave</label>
<input type='text' name='clave' id='clave'><br>
<input type="submit" value="VALIDAR">
</form>

@endsection


