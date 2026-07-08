<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovimientoController extends Controller
{
    public function index(){
        return view('movimientos.index');
    }

    public function create(){
        return view('movimientos.create');
    }
    public function store(Request $request){
        

    }

    
    public function show($movimiento){
        return view('movimientos.show', [
            'movimiento' => $movimiento,
        ]);

    }

    public function edit($id){
        return view('movimientos.edit', [
            'movimiento' => $id,
        ]);

    }

    public function update($id){

    }

    public function destroy($id){

    }
}
