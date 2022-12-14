@extends('layouts.app')
@section('content')
<form action="{{route('votante.store')}}" method="POST">
    @csrf
    <div>
        <label for="nombres">Nombres</label>
        <input type="text" name="nombres" id="nombres">
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos">
    </div>
    <div>
        <label for="numero_documento">Numero Documento</label>
        <input type="number" name="numero_documento" id="numero_documento">
        <label for="complemento">Complemento</label>
        <input type="text" name="complemento" id="complemento" maxlength="2">
    </div>
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <label for="telefono">Telefono</label>
    <input type="text" name="telefono" id="telefono">
    <button type="submit">Guardar</button>

</form>
@endsection