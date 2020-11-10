<?php

namespace App\Http\Controllers;


use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    //
    static public function updateIDs($aluno_id, $comprovante_id)
    {
        $pessoa = Aluno::findOrFail($aluno_id);

        $pessoa->update([
            'comprovante_id' => $comprovante_id,
        ]);

        return true;
    }
}
