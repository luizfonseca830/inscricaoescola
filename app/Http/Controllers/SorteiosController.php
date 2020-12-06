<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SorteiosController extends Controller
{
    public function index()
    {
        return view('pages.sorteios.listarSorteios');
    }

    public function store(Request $request)
    {
        Sorteios::create([
            'descricao_sorteio' => $request->descricao_sorteio,
            'data_dia_sorteio' => $request->data_dia_sorteio
        ]);

        session()->put('sucess', 'Sorteio criado com sucesso!');
        return view('pages.sorteios.listarSorteios');
    }
}
