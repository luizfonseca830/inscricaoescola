<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class VisualizarPessoaController extends Controller
{
    public function show($id)
    {
        $pessoa = Pessoa::findOrFail($id);

        return view('pages.visualizar-pessoa', [
            'pessoa' => $pessoa,
        ]);
    }
}
