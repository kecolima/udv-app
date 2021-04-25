<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentosController extends Controller
{
    public function create(){
        return view('departamentos.create');
    }

    public function store(Request $request){
        Departamento::create([
            'nome' => $request->nome,
            'telefones' => $request->telefones,
        ]);
        return "Departamento Salvo!";
    }

    public function show(Request $request){
        $departamentos = Departamento::all();
        return view('departamentos.todos', ['departamentos' => $departamentos]);
    }

    public function destroy($id){
        $departamento = Departamento::findOrFail($id);
        $departamento->delete();
        return 'Excluido';
    }

    public function edit($id){
        $departamento = Departamento::findOrFail($id);
        return view('departamentos.editar', ['departamento' => $departamento]);
    }

    public function update(Request $request){
        $departamento = Departamento::findOrFail($request->id);
        $departamento->update([
            'nome' => $request->nome,
            'telefones' => $request->telefones,
        ]);
        return "Departamento Atualizado!";
    }
}
