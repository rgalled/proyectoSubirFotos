@extends(base)

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
                    <td>{{$pokemon->id}}</td>
                    <td>{{$pokemon->nombre}}</td>
                    <td>{{$pokemon->extension}} kg</td>
                    <td>{{$pokemon->timestamps}} m</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection