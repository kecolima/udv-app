<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('site/home');
});

Route::get('/painel', "PainelController@ver");

Route::get('/usuario/novo', "UsuariosController@create");
Route::post('/usuario/novo', "UsuariosController@store")->name('salvar_usuario');
Route::get('/usuario/ver', "UsuariosController@show");
Route::get('/usuario/deletar/{id}', "UsuariosController@destroy")->name('excluir_usuario');
Route::get('/usuario/editar/{id}', "UsuariosController@edit")->name('editar_usuario');
Route::post('/usuario/editar/{id}', "UsuariosController@update")->name('atualizar_usuario');

Route::get('/funcionario/novo', "FuncionariosController@create");
Route::post('/funcionario/novo', "FuncionariosController@store")->name('salvar_funcionario');
Route::get('/funcionario/ver', "FuncionariosController@show");
Route::get('/funcionario/deletar/{id}', "FuncionariosController@destroy")->name('excluir_funcionario');
Route::get('/funcionario/editar/{id}', "FuncionariosController@edit")->name('editar_funcionario');
Route::post('/funcionario/editar/{id}', "FuncionariosController@update")->name('atualizar_funcionario');

Route::get('/cargo/novo', "CargosController@create");
Route::post('/cargo/novo', "CargosController@store")->name('salvar_cargo');
Route::get('/cargo/ver', "CargosController@show");
Route::get('/cargo/deletar/{id}', "CargosController@destroy")->name('excluir_cargo');
Route::get('/cargo/editar/{id}', "CargosController@edit")->name('editar_cargo');
Route::post('/cargo/editar/{id}', "CargosController@update")->name('atualizar_cargo');

Route::get('/departamento/novo', "DepartamentosController@create");
Route::post('/departamento/novo', "DepartamentosController@store")->name('salvar_departamento');
Route::get('/departamento/ver', "DepartamentosController@show");
Route::get('/departamento/deletar/{id}', "DepartamentosController@destroy")->name('excluir_departamento');
Route::get('/departamento/editar/{id}', "DepartamentosController@edit")->name('editar_departamento');
Route::post('/departamento/editar/{id}', "DepartamentosController@update")->name('atualizar_departamento');

Route::get('/historico_funcionario/novo', "HistoricoFuncionariosController@create");
Route::post('/historico_funcionario/novo', "HistoricoFuncionariosController@store")->name('salvar_historico_funcionario');
Route::get('/historico_funcionario/ver', "HistoricoFuncionariosController@show");
Route::get('/historico_funcionario/deletar/{id}', "HistoricoFuncionariosController@destroy")->name('excluir_historico_funcionario');
Route::get('/historico_funcionario/editar/{id}', "HistoricoFuncionariosController@edit")->name('editar_historico_funcionario');
Route::post('/historico_funcionario/editar/{id}', "HistoricoFuncionariosController@update")->name('atualizar_historico_funcionario');
