<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    //
    static public function updateIDs($pessoa_id, $comprovante_id){
        $pessoa = Pessoa::findOrFail($pessoa_id);

        $pessoa->update([
            'comprovante_id' => $comprovante_id,
        ]);

        return true;
    }
}
