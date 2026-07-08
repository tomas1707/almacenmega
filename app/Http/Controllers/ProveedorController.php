<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores = Proveedor::orderBy('nombre')->get();

        return view('proveedor.index', [
            'proveedores' => $proveedores,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => ['required', 'string', 'max:150'],
            'rfc' => ['required', 'string', 'max:13', 'unique:proveedores,rfc'],
            'telefono' => ['required', 'string', 'max:20'],
            'correo' => ['required', 'email', 'max:150', 'unique:proveedores,correo'],
            'direccion' => ['required', 'string'],
            'activo' => ['nullable', 'boolean'],
        ]);

        $datos['activo'] = $request->boolean('activo');

        Proveedor::create($datos);

        return redirect()
            ->route('proveedores.listar')
            ->with('mensaje', 'Proveedor registrado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedor $proveedor)
    {
        return view('proveedor.show', [
            'proveedor' => $proveedor,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proveedor $proveedor)
    {
        return view('proveedor.edit', [
            'proveedor' => $proveedor,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proveedor $proveedor)
    {
        $datos = $request->validate([
            'nombre' => ['required', 'string', 'max:150'],
            'rfc' => ['required', 'string', 'max:13', 'unique:proveedores,rfc,'.$proveedor->id],
            'telefono' => ['required', 'string', 'max:20'],
            'correo' => ['required', 'email', 'max:150', 'unique:proveedores,correo,'.$proveedor->id],
            'direccion' => ['required', 'string'],
            'activo' => ['nullable', 'boolean'],
        ]);

        $datos['activo'] = $request->boolean('activo');

        $proveedor->update($datos);

        return redirect()
            ->route('proveedores.listar')
            ->with('mensaje', 'Proveedor actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();

        return redirect()
            ->route('proveedores.listar')
            ->with('mensaje', 'Proveedor eliminado correctamente');
    }
}
