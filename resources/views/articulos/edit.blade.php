<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <h1>Editar Articulo</h1>
    <form action="{{ route('articulos.update', $articulo->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="titulo">Titulo: </label>
        <input type="text" name="titulo" value="{{$articulo->titulo}}" required>
        <br>
        <label for="contenido">Contenido: </label>
        <textarea name="contenido" required>{{ $articulo->contenido }}</textarea>
        <br>
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{route('articulos.index')}}">Volver</a>
</body>
</html>