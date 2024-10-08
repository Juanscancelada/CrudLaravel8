<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear</title>
</head>
<body>
    <h1>Crear Articulo</h1>
    <form action="{{ route('articulos.store')}}" method="POST">
        @csrf
        <label for="titulo">Titulo: </label>
        <input type="text" name="titulo" required>
        <br> 
        <label for="contenido">Contenido: </label>
        <input type="text" name="contenido" required>
        <br>
        <button type="submit">Crear articulo</button>
    </form>
    <a href="{{route('articulos.index')}}">Volver</a>
</body>
</html>