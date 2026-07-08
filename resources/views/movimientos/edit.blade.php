<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar movimiento</title>
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="p-4">
    <h1>Editar movimiento {{ $movimiento }}</h1>
    <p class="text-muted">Vista base para editar un movimiento.</p>
    <a href="{{ route('movimientos.index') }}" class="btn btn-secondary">Volver</a>
</body>
</html>
