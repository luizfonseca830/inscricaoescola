<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AreaRestritaController extends Controller
{
    public function index(Request $request)
    {
        //
        $data_inicio = date('Y-m-d', strtotime($request->data_inicio));
        $data_fim = date('Y-m-d', strtotime($request->data_fim));
        $pessoasdb = Pessoa::all();
        $pessoas = [];
        foreach ($pessoasdb as $pessoa){
            $data_db = date('Y-m-d', strtotime($pessoa->periodo_inicio));
            if(($data_db >= $data_inicio) && ($data_db <= $data_fim)){
                array_push($pessoas, $pessoa);
            }
        }
        return view('pages.visualizacao')->with('pessoas', $pessoas);
    }

    public function filter()
    {
        return view('pages.filter');
    }
}
