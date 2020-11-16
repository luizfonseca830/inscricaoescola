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
        'recurso' => \App\Models\TipoTela::where('nome_ou_anexo', 'Recurso')->first(),
        'pdfs' => \App\Models\TipoTela::where('tipo', 'PDF')->get(),
        'inscricao' => \App\Models\TipoTela::where('nome_ou_anexo', 'Inscrição')->first(),
        'protocolo' => \App\Models\TipoTela::where('nome_ou_anexo', 'Protocolo')->first(),
    ]);
})->name('inical');

Route::get('/recurso', function () {
    return view('recurso.recurso');
})->name('recurso');
Route::post('/recurso-pedir', 'RecursoController@pedirRecurso')->name('recurso-pedir');



Route::get('/registro', function () {
    $cargo = \App\Models\Cargo::all();
    $escolaridade = \App\Models\Escolaridade::all();
    return view('registro.registro')->with([
        'cargos' => $cargo,
        'escolaridade' => $escolaridade
    ]);
})->name('registro');



Route::any('registro/parte1', 'RegistroController@storePart1')->name('registro/parte1');
Route::post('registro/parte2', 'RegistroController@storePart2')->name('registro/parte2');
Route::get('/registro/anexos', 'RegistroController@buscaIndex')->name('registro/anexos');
Route::post('registro/teste', 'RegistroController@teste')->name('teste');

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
    Route::get('/avaliar/{id}', 'AreaRestritaController@index2')->name('/avaliar');
    Route::post('pontuacao', 'PontuacaoController@store')->name('pontuacao');

	Route::get('/visualizacao-aprovar', 'AreaRestritaController@indexa3')->name('visualizacao-aprovar');
    Route::get('/aprovar/{id}', 'AreaRestritaController@aprovar')->name('/aprovar');
    Route::post('/reprovarpessoa', 'PontuacaoController@reavaliar')->name('reprovarpessoa');
    Route::get('/aprovarpessoa/{id}', 'PontuacaoController@aceitarAvaliacao')->name('aprovarpessoa');

    Route::get( 'visualizacao-recurso', 'AreaRestritaController@index4')->name('/visualizacao-recurso');
    Route::get('/recurso-unico/{id}', 'AreaRestritaController@recursoUnico')->name('recurso-unico');
    Route::post('recurso-aceitar', 'RecursoController@aceitar')->name('recurso-aceitar');
    Route::get('recurso-recusar/{id}', 'RecursoController@recusarmotivo')->name('recurso-recusarmotivo');
    Route::post('recurso-recusar', 'RecursoController@recusar')->name('recurso-recusar');

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

    Route::get('avaliacao-pne', 'PNE\AvaliacaoPNEController@index')->name('avaliacao-pne');
    Route::get('avaliacao-pne-aceitar/{id}', 'PNE\AvaliacaoPNEController@update')->name('avaliacao-pne-aceitar');
    Route::get('avaliacao-pne-recusar-motivo/{id}', 'PNE\AvaliacaoPNERecusarController@show')->name('avaliacao-pne-recusar-motivo');
    Route::match(['post', 'get'], 'avaliacao-pne-recusar/{id}', 'PNE\AvaliacaoPNERecusarController@update')->name('avaliacao-pne-recusar');

    Route::get('visualizacao-avaliar/{id}', 'VisualizacaoPessoas\VisualizarAvaliacaoController@show')->name('visualizacao-avaliar');
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
