<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Painel;
use App\Models\Departamento;
use App\Models\Cargo;
use App\Models\Funcionario;

class PainelController extends Controller
{
    public function ver(){
        $departamentos = Departamento::all();
        $cargos = Cargo::all();
        $funcionarios = Cargo::all();
        return view('site/dashboard', ['departamentos' => $departamentos, 'cargos' => $cargos, 'funcionarios' => $funcionarios]);
    }

    public function store(Request $request){
        Painel::create([
            'nome' => $request->nome,
            'perfil' => $request->perfil,
            'email' => $request->email,
            'senha' => $request->senha,
        ]);
        return "Painel Salvo!";
    }

    public function show(Request $request){
        $usuarios = Painel::all();
        return view('painel.todos', ['painel' => $painel]);
    }

    public function destroy($id){
        $painel = Painel::findOrFail($id);
        $painel->delete();
        return 'Excluido';
    }

    public function edit($id){
        $painel = Painel::findOrFail($id);
        //die($painel);
        return view('painel.editar', ['painel' => $painel]);
    }

    public function update(Request $request){
        $painel = Painel::findOrFail($request->id);
        $painel->update([
            'nome' => $request->nome,
            'perfil' => $request->perfil,
            'email' => $request->email,
            'senha' => $request->senha,
        ]);
        return "Painel Atualizado!";
    }
}
