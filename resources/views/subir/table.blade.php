@extends('subir.base')

@section('content')
<table id="tablasubir">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Extension</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subidos as $subir)
                <tr>
                    <td>{{$subir->id}}</td>
                    <td>{{$subir->nombre}}</td>
                    <td>{{$subir->extension}}</td>
                    <td>{{$subir->timestamps}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection