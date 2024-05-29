<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Estudiantes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Registro de Estudiantes</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('guardar.estudiante') }}" method="post">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
        </div>
        <div>
            <label for="salon">Salón:</label>
            <input type="text" id="salon" name="salon" required>
        </div>
        <div>
            <label for="grado">Grado:</label>
            <input type="text" id="grado" name="grado" required>
        </div>
        <div>
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" required>
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
