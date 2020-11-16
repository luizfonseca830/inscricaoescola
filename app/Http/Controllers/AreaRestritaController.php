<?php

namespace App\Http\Controllers;

use App\Http\Requests\Recurso;
use App\Models\Pessoa;
use App\Models\RecursoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AreaRestritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //lista avaliar
    public function index()
    {
        //
        if (Auth::user()->tipo != 'Avaliador' && Auth::user()->tipo != 'Admin') {
            session()->put('error', 'Você não tem acesso a essa página!');
            return redirect()->route('home');
        }

        $pessoas = Pessoa::where('anexo_id', '!=', null)->paginate(40);
        return view('pages.visualizacao')->with('pessoas', $pessoas);
    }

    //id avaliar
    public function index2($id){
        if (Auth::user()->tipo != 'Avaliador' && Auth::user()->tipo != 'Admin') {
            session()->put('error', 'Você não tem acesso a essa página!');
            return redirect()->route('home');
        }

        $pessoa =  Pessoa::findOrFail($id);
        if ($pessoa->status == 1) {
            session()->put('error', 'Parece que alguém já avaliou essa pessoa!');
            return redirect()->route('/visualizacao');
        }

        return view('pages.avaliar', [
            'pessoa' => $pessoa
        ]);
    }

    //lista revisao
    public function indexa3(){
        if (Auth::user()->tipo != 'Revisor' && Auth::user()->tipo != 'Admin') {
            session()->put('error', 'Você não tem acesso a essa página!');
            return redirect()->route('home');
        }

        $pessoas = Pessoa::whereNotNull('status')->paginate(40);
        return view('pages.revisao')->with('pessoas', $pessoas);
    }

    //Aprovar
    public function aprovar($id){
        if (Auth::user()->tipo != 'Revisor' && Auth::user()->tipo != 'Admin') {
            session()->put('error', 'Você não tem acesso a essa página!');
            return redirect()->route('home');
        }

        $pessoa = Pessoa::findOrFail($id);
        return view('pages.revisao-unico', [
            'pessoa' => $pessoa
        ]);
    }

    //lista recurso
    public function index4(){
        if (Auth::user()->tipo != 'Recurso' && Auth::user()->tipo != 'Admin') {
            session()->put('error', 'Você não tem acesso a essa página!');
            return redirect()->route('home');
        }

        $recurso = RecursoModel::paginate(40);

        return view('pages.recurso')->with('recursos', $recurso);
    }

    //mostra pessoa unica que pediu recurso
    public function recursoUnico($id){
        if (Auth::user()->tipo != 'Recurso' && Auth::user()->tipo != 'Admin') {
            session()->put('error', 'Você não tem acesso a essa página!');
            return redirect()->route('home');
        }


        $pessoa = Pessoa::findOrFail($id);

        #VERIFICA SE O RECURSO JA FOI AVALIADO
        if (!is_null($pessoa->recurso->status)) {
            session()->put('error', 'Parece que alguém já revisou esse recurso!');
            return redirect()->route('/visualizacao-recurso');
        }

        return view('pages.recurso-unico')->with('pessoa', $pessoa);

    }
}
