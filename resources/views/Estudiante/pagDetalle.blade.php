@extends('pagPlantilla')

@section('titulo')
    <h1>PAGINA DE LISTA... </h1>
@endsection

@section('seccion')
    <h3> Detalle estudiante </h3>

    <p> Id:                     {{ $xDetAlumnos->id}} </p>
    <p> Codigo                  {{ $xDetAlumnos->codEst}} </p>
    <p> Apellido y Nombres      {{ $xDetAlumnos->apeEst}},{{ $xDetAlumnos->nomEst}} </p>
    <p> Fecha de nacimineto     {{ $xDetAlumnos->fnaEst}} </p>
    <p> Turno                   {{ $xDetAlumnos->turEst}} </p>
    <p> Semestre                {{ $xDetAlumnos->semEst}} </p>
    <p> Estado de matricula     {{ $xDetAlumnos->estEst}} </p>


@endsection


