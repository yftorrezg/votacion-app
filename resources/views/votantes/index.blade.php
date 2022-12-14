@extends('layouts.app')
@section('content')

<div>
    {{isset($mensaje)?$mensaje:''}}
</div>

<table>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Numero Documento</th>
    <th>Complemento</th>
    <th>Email</th>
    <th>Telefono</th>
    <th>Acciones</th>
    @foreach ($votantes as $votante)
        <tr>
            <td>{{ $votante->nombres }}</td>
            <td>{{ $votante->apellidos }}</td>
            <td>{{ $votante->numero_documento }}</td>
            <td>{{ $votante->complemento }}</td>
            <td>{{ $votante->email }}</td>
            <td>{{ $votante->telefono }}</td>
            <td>
                <a href="{{route('votante.edit', $votante->id)}}">Editar</a>
                <form action="{{route('votante.destroy', $votante->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
        </tr>
        
    @endforeach

    <a href="{{route('votante.create')}}">Insertar</a>


</table>
@endsection