@extends('subir.base')

@section('content')
<form id="upload-form" action="{{ route('archivos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <p>sube la foto que quieras</p>
            <input type="file" name="archivos[]" id="foto" accept="image/*" multiple required>
        </div>
        <button type="submit">Subir</button>
    </form>
@endsection