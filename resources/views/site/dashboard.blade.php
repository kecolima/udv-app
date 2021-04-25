@extends('site.home')
@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-tittle-container">
    Dashboard
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    <hr>
    <p>
        total de Departamentos:
    </p>
    {{$departamentos}}
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    <hr>
    <p>
        total de Cargos:
    </p>
    {{$cargos}}
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    <hr>
    <p>
        total de Funcionários:
    </p>
    {{$funcionarios}}
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    <hr>
        <p>
            total de Funcionários por situação:
        </p>

</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    <hr>
        <p>
            total de Funcionários por categoria:
        </p>

</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    <hr>
        <p>
             Valor total da folha de pagamento:
        </p>

</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    <hr>
        <p>
            últimos registros de histórico com filtro por datas e tipo de histórico:
        </p>

</div>

@endsection
