@extends('plantilla')

@section('seccion')
    <h1>Galeria de Fotos</h1>
@endsection

@if (!empty($foto))

    <h1>Persona: </h1>
    <h3>{{ $foto }}</h3>

@endif