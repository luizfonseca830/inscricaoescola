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

//LOGIN
Auth::routes([
    'register' => false
]);
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sair', function () {
    auth()->logout();
    return redirect()->route('inical');
})->name('sair');

Route::get('/', function () {
    return view('welcome', [
        'pdfs' => \App\Models\TipoTela::where('tipo', 'PDF')->get(),
        'inscricao' => \App\Models\TipoTela::where('nome_ou_anexo', 'Inscrição')->first(),
        'protocolo' => \App\Models\TipoTela::where('nome_ou_anexo', 'Protocolo')->first(),
    ]);
})->name('inical');


Route::get('/registro', function () {
    $escolaridade = \App\Models\Escolaridade::all();
    return view('registro.registro')->with([
        'escolaridade' => $escolaridade
    ]);
})->name('registro');

Route::any('registro/parte1', 'RegistroController@store')->name('registro/parte1');


Route::get('/comprovante/{comprovante}', 'ComprovanteController@index')->name('registro/comprovante'); //

Route::get('/visualizacao', function (){
    return view('area-restrita.visualizacao');
})->name('visualizacao');


Route::get('/protocolo', 'ComprovanteController@protocolo')->name('protocolo');
Route::post('comprovante-procurar', 'ComprovanteController@procurar')->name('comprovante-procurar');



Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('/visualizacao', 'AreaRestritaController@index')->name('/visualizacao');
    Route::get('/add-user', function () {
        return view('auth.register');
    })->name('add-user');
    Route::post('add-create', 'AddUserController@store')->name('add-create');
    Route::get('delete-user/{id}', 'UserController@delete')->name('delete-user');
    Route::get('edit-user/{id}', 'UserController@show')->name('edit-user');
    Route::any('update-user/{id}', 'UserController@update')->name('update-user');
    Route::get('/lista-transparencia', 'TransparenciaController@index')->name('lista-transparencia');
    Route::get('/unico-transparencia/{id}', 'TransparenciaController@show')->name('unico-transparencia');
    Route::post('/pesquisa-transparencia', 'TransparenciaController@search')->name('pesquisa-transparencia');

    Route::get('/relatorios', 'RelatoriosController@index')->name('relatorios');
    Route::post('/relatorio-gerar', 'RelatoriosController@requestPDFJasper')->name('gerar-relatorio');

    Route::get('/tela-criar', 'TelasDinamicas\TelaCriarController@index')->name('tela-criar');
    Route::get('/tela-liberar', 'TelasDinamicas\TelaLiberarController@index')->name('tela-liberar');
    Route::post('tela-criar-salvar', 'TelasDinamicas\TipoTelaController@store')->name('tela-criar-salvar');
    Route::get('tela-deletar/{id}', 'TelasDinamicas\TipoTelaController@delete')->name('tela-deletar');
    Route::get('tela-unica-mostra/{id}', 'TelasDinamicas\TipoTelaController@show')->name('tela-unica-mostra');
    Route::match(['post', 'get'], 'tela-editar/{id}', 'TelasDinamicas\TipoTelaController@update')->name('tela-editar');

    Route::get('busca-candidato', 'BuscaCandidatos\BuscaCandidatosController@index')->name('busca-candidatos');
    Route::post('pesquisa-candidato', 'BuscaCandidatos\BuscaCandidatosController@show')->name('pesquisa-candidato');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::get('/gerarPDF/{comprovante}', 'ComprovanteController@gerarComprovanteCpf')->name('gerarpdf-comprovante');
Route::get('pdf', function () {
    return view('pdf');
})->name('pdf');
