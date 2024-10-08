<!DOCTYPE html>
<html>
<head>
    <title>Artículos</title>
</head>
<body>
    <h1>Artículos</h1>
    <a href="{{ route('articulos.create') }}">Crear nuevo artículo</a>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Contenido</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
                <tr>
                    <td>{{ $articulo->titulo }}</td>
                    <td>{{ $articulo->contenido }}</td>
                    <td>
                        <a href="{{ route('articulos.edit', $articulo->id) }}">Editar</a>
                        <form action="{{ route('articulos.destroy', $articulo->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
