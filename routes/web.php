<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Candidato;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-colaborador', function (Request $informacoes) {
    Candidato::create([
        'name' => $informacoes->nome_candidato,
        'cargo' => $informacoes->cargo,
        'status' => $informacoes->status
    ]);
    //  dd($informacoes->all());

    echo "Candidato Criado com SUCESSO";
});

Route::get('/mostrar-candidato/{id_do_candidato}', function ($id_do_cadidato) {
    $candidato = Candidato::findOrFail($id_do_cadidato);
    echo $candidato->name;
    echo "<br />";
    echo $candidato->cargo;
    echo "<br />";
    echo $candidato->status;
});

Route::get('/editar-candidato/{id_do_candidato}', function ($id_do_cadidato) {
    $candidato = Candidato::findOrFail($id_do_cadidato);
    return view('editar_candidato', ['candidato' => $candidato]);
});

Route::put('/atualizar-candidato/{id_do_candidato}', function (Request $informacoes, $id_do_cadidato) {
    $candidato = Candidato::findOrFail($id_do_cadidato);
    $candidato->name  = $informacoes->nome_candidato;
    $candidato->cargo = $informacoes->cargo;
    $candidato->status = $informacoes->status;
    $candidato->save();
    echo "Candidato atualizado com Sucesso";
});
