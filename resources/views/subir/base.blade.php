<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="{{route('subir.index')}}">Home</a>
        <a href="{{route('subir.create')}}">Upload</a>
        <a href="{{route('subir.table')}}">Images</a>
    </header>
    <div>
        @yield('content')
    </div>
</body>
</html>