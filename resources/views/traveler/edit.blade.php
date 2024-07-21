<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('traveler.update', $traveler) }}" method="POST" enctype="multipart/form-data">

@csrf
@method('put')
<label>
    Dni:
    <br>
    <input type="text" name="dni" value="{{ old('dni', $traveler->dni) }}">
</label>
<br>
<label>
    Nombre:
    <br>
    <input type="text" name="nombre" value="{{ old('nombre', $traveler->nombre) }}">
</label>
<br>_
<label>
    Direccion:
    <br>
    <input type="text" name="direccion" value="{{ old('direccion', $traveler->direccion) }}">
</label>

<br>
<label>
    Telefono:
    <br>
    <input type="text" name="telefono" value="{{ old('telefono', $traveler->telefono) }}">
</label>
<br>
<br>

<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>