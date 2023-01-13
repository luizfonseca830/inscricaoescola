<?php

namespace App\Http\Controllers;

use App\Models\Escolaridade;
use App\Models\Pessoa;
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

        $pessoa = Pessoa::whereNotNull('id')->get()->count();

        $primeiroano = DB::select("SELECT count(id) as total FROM pessoa where escolaridade_id = 1");

        $segundoano = DB::select("SELECT count(id) as total FROM pessoa where escolaridade_id = 2");

        $terceiroano = DB::select("SELECT count(id) as total FROM pessoa where escolaridade_id = 3");

        $quartoano = DB::select("SELECT count(id) as total FROM pessoa where escolaridade_id = 4");

        $quintoano = DB::select("SELECT count(id) as total FROM pessoa where escolaridade_id = 5");

        $sextoano = DB::select("SELECT count(id) as total FROM pessoa where escolaridade_id = 6");

        $setimoano = DB::select("SELECT count(id) as total FROM pessoa where escolaridade_id = 7");

        $oitavomoano = DB::select("SELECT count(id) as total FROM pessoa where escolaridade_id = 8");

        $nonoano = DB::select("SELECT count(id) as total FROM pessoa where escolaridade_id = 9");

        $graficoseries = DB::select("SELECT esc.nivel_escolaridade as escolaridade, COUNT(pessoa.id)  as totalpessoa FROM pessoa inner join escolaridade esc on escolaridade_id = esc.id GROUP BY escolaridade");

        return view('dashboard', [
            'inscricao_total' => $pessoa,
            'inscricao_primeiroano' => $primeiroano[0],
            'inscricao_segundoano' => $segundoano[0],
            'inscricao_terceiroano' => $terceiroano[0],
            'inscricao_quartoano' => $quartoano[0],
            'inscricao_quintoano' => $quintoano[0],
            'inscricao_sextoano' => $sextoano[0],
            'inscricao_setimoano' => $setimoano[0],
            'inscricao_oitavomoano' => $oitavomoano[0],
            'inscricao_nonoano' => $nonoano[0],
            'grafico' => $graficoseries[0],
        ]);
    }
}
