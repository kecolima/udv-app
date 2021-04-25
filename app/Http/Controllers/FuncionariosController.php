<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use App\Models\Cargo;

class FuncionariosController extends Controller
{
    public function create(){
        $cargos = Cargo::all();
        return view('funcionarios.create', ['cargos' => $cargos]);
    }

    public function store(Request $request){
        Funcionario::create([
            'nome' => $request->nome,
            'dataNascimento' => $request->dataNascimento,
            'sexo' => $request->sexo,
            'senha' => $request->senha,
            'email' => $request->email,
            'salario' => $request->salario,
            'enderecos' => $request->enderecos,
            'telefones' => $request->telefones,
            'cargo' => $request->cargo,
            'categoria' => $request->categoria,
            'situacao' => $request->situacao,
        ]);
        return 'Funcionario Salvo!';
    }

    public function show(Request $request){
        $funcionarios = Funcionario::all();
        return view('funcionarios.todos', ['funcionarios' => $funcionarios]);
    }

    public function destroy($id){
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->delete();
        return 'Excluido';
    }

    public function edit($id){
        $funcionario = Funcionario::findOrFail($id);
        return view('funcionarios.editar', ['funcionario' => $funcionario]);
    }

    public function update(Request $request){
        $funcionario = Funcionario::findOrFail($request->id);
        $funcionario->update([
            'nome' => $request->nome,
            'dataNascimento' => $request->dataNascimento,
            'sexo' => $request->sexo,
            'senha' => $request->senha,
            'email' => $request->email,
            'salario' => $request->salario,
            'enderecos' => $request->enderecos,
            'telefones' => $request->telefones,
            'cargo' => $request->cargo,
            'categoria' => $request->categoria,
            'situacao' => $request->situacao,
        ]);
        return "Funcionario Atualizado!";
    }
}