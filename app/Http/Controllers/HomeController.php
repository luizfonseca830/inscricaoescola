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
        $pessoa2021 = Pessoa::all()->count();
//        $pessoa2022 = DB::select("SELECT count(id) as total FROM pessoa where DATE_FORMAT (periodo_inicio,'%Y') >= 2022");
        $pessoa2022 = Pessoa::all();
        $arrayPessoas = [];
        foreach ($pessoa2022 as $pessoa) {
            if (date('Y', strtotime($pessoa->periodo_inicio)) == '2022') {
                array_push($arrayPessoas, $pessoa);
            }
        }

        return view('dashboard', [
            'inscricao_total' => $pessoa2021,
            'inscritos_2022' => count($arrayPessoas)
        ]);
    }
}
