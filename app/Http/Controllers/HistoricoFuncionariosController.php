<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoricoFuncionario;
use App\Models\Funcionario;

class HistoricoFuncionariosController extends Controller
{
    public function create(){
        $funcionarios = Funcionario::all();
        return view('historicoFuncionarios.create', ['funcionarios' => $funcionarios]);
    }

    public function store(Request $request){
        HistoricoFuncionario::create([
            'tipoHistorico' => $request->tipoHistorico,
            'descricao' => $request->descricao,
            'id_funcionario' => $request->id_funcionario,
            'data' => $request->data,
        ]);
        return "HistoricoFuncionario Salvo!";
    }

    public function show(Request $request){
        $historicoFuncionarios = HistoricoFuncionario::all();
        return view('historicoFuncionarios.todos', ['historicoFuncionarios' => $historicoFuncionarios]);
    }

    public function destroy($id){
        $historicoFuncionario = HistoricoFuncionario::findOrFail($id);
        $historicoFuncionario->delete();
        return 'Excluido';
    }

    public function edit($id){
        $historicoFuncionario = HistoricoFuncionario::findOrFail($id);
        return view('historicoFuncionarios.editar', ['historicoFuncionario' => $historicoFuncionario]);
    }

    public function update(Request $request){
        $historicoFuncionario = HistoricoFuncionario::findOrFail($request->id);
        $historicoFuncionario->update([
            'tipoHistorico' => $request->tipoHistorico,
            'descricao' => $request->descricao,
            'id_funcionario' => $request->id_funcionario,
            'data' => $request->data,
        ]);
        return "HistoricoFuncionario Atualizado!";
    }
}
