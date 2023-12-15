@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4"><b><i>Página de Detalle Seguimiento</b></i></h1>
@endsection

@section('seccion')
   <h3> Detalle seguimiento </h3>

   <p> <b>Id:</b>                  {{ $xDetSeg->id }} </p>
   <p> <b>Id Estudiante:</b>              {{ $xDetSeg->idEst }} </p>
   <p> <b>Trabja:</b>               {{ $xDetSeg->traAct }} </p>
   <p> <b>Oficio:</b> {{ $xDetSeg->ofiAct }} </p>
   <p> <b>satisfaccion del Estudiante:</b>               {{ $xDetSeg->satEst }} </p>
   <p> <b>Fecha del Seguimiento:</b>            {{ $xDetSeg->fecSeg }} </p>
   <p> <b>Estado de seguimiento:</b> {{ $xDetSeg->estSeg }} </p>
    
@endsection
   

