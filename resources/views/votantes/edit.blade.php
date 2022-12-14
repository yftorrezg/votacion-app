@extends('layouts.app')
@section('content')
<form action="{{route('votante.update',$votante->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="nombres">Nombres</label>
        <input type="text" name="nombres" id="nombres" value="{{$votante->nombres}}">
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" value="{{$votante->apellidos}}"">
    </div>
    <div>
        <label for="numero_documento">Numero Documento</label>
        <input type="number" name="numero_documento" id="numero_documento" value="{{$votante->numero_documento}}">
        <label for="complemento">Complemento</label>
        <input type="text" name="complemento" id="complemento" maxlength="2" value="{{$votante->complemento}}">
    </div>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{$votante->email}}">
    <label for="telefono">Telefono</label>
    <input type="text" name="telefono" id="telefono" value="{{$votante->telefono}}">
    <button type="submit">Guardar</button>

</form>
@endsection