<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;
use App\Models\Departamento;

class CargosController extends Controller
{
    public function create(){
        $departamentos = Departamento::all();
        return view('cargos.create', ['departamentos' => $departamentos]);
    }

    public function store(Request $request){
        Cargo::create([
            'nome' => $request->nome,
            'departamento' => $request->departamento,
            'salarioBase' => $request->salarioBase,
        ]);
        return "Cargo Salvo!";
    }

    public function show(Request $request){
        $cargos = Cargo::all();
        return view('cargos.todos', ['cargos' => $cargos]);
    }

    public function destroy($id){
        $cargo = Cargo::findOrFail($id);
        $cargo->delete();
        return 'Excluido';
    }

    public function edit($id){
        $cargo = Cargo::findOrFail($id);
        return view('cargos.editar', ['cargo' => $cargo]);
    }

    public function update(Request $request){
        $cargo = Cargo::findOrFail($request->id);
        $cargo->update([
            'nome' => $request->nome,
            'departamento' => $request->departamento,
            'salarioBase' => $request->salarioBase,
        ]);
        return "Cargo Atualizado!";
    }
}
