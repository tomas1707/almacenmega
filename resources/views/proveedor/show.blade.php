<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalle de proveedor</title>
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper p-4">
    <section class="content-header">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <h1>{{ $proveedor->nombre }}</h1>
            <a href="{{ route('proveedor.edit', $proveedor) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Editar
            </a>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-3">RFC</dt>
                        <dd class="col-sm-9">{{ $proveedor->rfc }}</dd>

                        <dt class="col-sm-3">Telefono</dt>
                        <dd class="col-sm-9">{{ $proveedor->telefono }}</dd>

                        <dt class="col-sm-3">Correo</dt>
                        <dd class="col-sm-9">{{ $proveedor->correo }}</dd>

                        <dt class="col-sm-3">Direccion</dt>
                        <dd class="col-sm-9">{{ $proveedor->direccion }}</dd>

                        <dt class="col-sm-3">Activo</dt>
                        <dd class="col-sm-9">{{ $proveedor->activo ? 'Si' : 'No' }}</dd>
                    </dl>
                    <a href="{{ route('proveedores.listar') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>
