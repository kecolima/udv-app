@extends('site.home')
@section('title', 'Listar Departamentos')

@section('content')

<h1>Departamentos</h1>
@if (count($errors) > 0)
	<div class="alert alert-danger">
	<strong>Erros:</strong>
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif

@php
    $totalDepartamentos = 0;
@endphp

    <a class="btn btn-small btn-primary" href="{{ action("DepartamentosController@create") }}">Cadastrar</a>
    <hr>
    <table width="100%" class="table table-striped table-hover">
        <thead class="thead-dark table-dark">
            <tr>
                <th>Nome</th>
                <th>Telefone(s)</th>
                <th>Total Funcionários</th>
                <th>Total salários</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        @foreach($departamentos as $departamento)
            <tr>
                <td>{{$departamento->nome}}</td>
                <td>{{$departamento->telefones}}</td>
                <td>{{$departamento->totalFuncionarios}}</td>
                <td>{{$departamento->totalSalarios}}</td>
                <td><a class="alert-link" style="color:#0000FF" href="{{ route('atualizar_departamento', ['id'=>$departamento->id])}}" title="Atualizar Usuário {{ $departamento->nome }}">Editar</a></td>
                <td><a class="alert-link" style="color:#FF0000" href="{{ route('excluir_departamento', ['id'=>$departamento->id])}}" title="Excluir Usuário {{ $departamento->nome }}">Excluir</a></td>
            </tr>
            @php
                $totalDepartamentos++;
            @endphp
        @endforeach
    </table>
    <table>
        <tr><th>Total de Departamentos: {{$totalDepartamentos}}</th></tr>
    </table>
@stop

