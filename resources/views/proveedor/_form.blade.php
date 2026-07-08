@csrf

<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $proveedor->nombre ?? '') }}" maxlength="150">
    @error('nombre') <span class="invalid-feedback">{{ $message }}</span> @enderror
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="rfc">RFC</label>
        <input type="text" name="rfc" id="rfc" class="form-control @error('rfc') is-invalid @enderror" value="{{ old('rfc', $proveedor->rfc ?? '') }}" maxlength="13">
        @error('rfc') <span class="invalid-feedback">{{ $message }}</span> @enderror
    </div>

    <div class="form-group col-md-6">
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" id="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{ old('telefono', $proveedor->telefono ?? '') }}" maxlength="20">
        @error('telefono') <span class="invalid-feedback">{{ $message }}</span> @enderror
    </div>
</div>

<div class="form-group">
    <label for="correo">Correo</label>
    <input type="email" name="correo" id="correo" class="form-control @error('correo') is-invalid @enderror" value="{{ old('correo', $proveedor->correo ?? '') }}" maxlength="150">
    @error('correo') <span class="invalid-feedback">{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label for="direccion">Direccion</label>
    <textarea name="direccion" id="direccion" class="form-control @error('direccion') is-invalid @enderror" rows="4">{{ old('direccion', $proveedor->direccion ?? '') }}</textarea>
    @error('direccion') <span class="invalid-feedback">{{ $message }}</span> @enderror
</div>

<div class="form-group form-check">
    <input type="checkbox" name="activo" id="activo" class="form-check-input" value="1" @checked(old('activo', $proveedor->activo ?? true))>
    <label for="activo" class="form-check-label">Activo</label>
</div>

<div class="d-flex justify-content-between">
    <a href="{{ route('proveedores.listar') }}" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
