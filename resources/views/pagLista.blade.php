@extends('pagPlantilla')

@section('titulo')
    <h1>PAGINA DE LISTA... </h1>
@endsection

@section('seccion')
    <h3>LISTA </h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Codigo</th>
                <th scope="col">Apellidos y Nombres</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
    

            @foreach($xAlumnos as $item)
            <tr>
                <th scope="row">{{ $item->id}}</th>
                <td>{{ $item->codEst}}</td>
                <td>
                    <a href="{{ route('Estudiante.xDetalle', $item->id) }}"> 
                        {{ $item -> apeEst }} - {{ $item -> nomEst }} 
                    </a>

                </td>
                <td>@mdo</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection


