<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\Pontuacao;
use App\Models\RecursoModel;
use App\Models\TipoTela;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $pessoa = Pessoa::whereNotNull('anexo_id')->get()->count();
        $pontuacao = Pessoa::whereNotNull('status')->get()->count();
        $recurso = RecursoModel::all()->count();
        return view('dashboard', [
            'inscricao_total' => $pessoa,
            'avaliacao_total' => $pontuacao,
            'recurso_total' => $recurso,
        ]);
    }
}
