<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <table class="table">
            <td>
                <h4>id traveler
            </td>
            <td>
                <h4>dni
            </td>
            <td>
                <h4>nombre
            <td>
                <h4>direccion
            </td>
            <td>
                <h4>telefono
            </td>
    
    
            @foreach ($traveler as $traveler)
                <tr>
                    <td>{{ $traveler->id }}</td>
                    <td>{{ $traveler->dni }}</td>
                    <td>{{ $traveler->nombre }} </td>
                    <td>{{ $traveler->direccion }} </td>
                    <td>{{ $traveler->telefono }} </td>
                    <td><a href="{{ route('traveler.show', $traveler->id) }}"
                            style="text-decoration: none">Mostrar</a></td>
                    <td><a href="{{ route('traveler.edit', $traveler->id) }}" style="text-decoration: none">Editar</a></td>
                    <td>
                        <form action="{{ route('traveler.destroy', $traveler->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-primary">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </center>
    
</body>
</html>