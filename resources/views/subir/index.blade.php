@extends('subir.base')

@section('content')
    <h1>Home</h1>
        <div>
            @foreach($archivos as $archivo)
                <div>
                <p>{{ $archivo->nombre_original }}</p>
                    <a href="{{ route('subir.img', $archivo->id) }}">
                        <img src="{{ route('subir.img', $archivo->id) }}" alt="{{ $archivo->nombre_original }}">
                    </a>
                </div>
            @endforeach
        </div>
    @endif
@endsection