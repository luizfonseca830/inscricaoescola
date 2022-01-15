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
        $pessoas = DB::select("SELECT * FROM pessoa where DATE_FORMAT (periodo_inicio,'%Y-%m-%d') BETWEEN '$data_inicio' AND '$data_fim'");
        return view('pages.visualizacao')->with('pessoas', $pessoas);
    }

    public function filter()
    {
        return view('pages.filter');
    }
}
