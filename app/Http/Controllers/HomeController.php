<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\Pontuacao;
use App\Models\RecursoModel;
use App\Models\TipoTela;
use Illuminate\Support\Facades\DB;

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
        $pessoa = Pessoa::all()->count();
        $pessoa2022 = DB::select("SELECT count(id) as total FROM pessoa where DATE_FORMAT (periodo_inicio,'%Y') >= 2022");
        return view('dashboard', [
            'inscricao_total' => $pessoa,
            'inscritos_2022' => $pessoa2022[0]
        ]);
    }
}
