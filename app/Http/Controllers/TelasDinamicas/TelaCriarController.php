<?php

namespace App\Http\Controllers\TelasDinamicas;

use App\Http\Controllers\Controller;
use Illuminate\Http\File;
use Illuminate\Http\Request;

class TelaCriarController extends Controller
{
    //
    public function index(){
        $directory = public_path() . '/jasper/pdf';
        //verificar se o diretorio existe
        if (!file_exists($directory)) {
            mkdir($directory, 0700);
        }
        $files = \File::allFiles($directory);

        return view('pages.telas-dinamicas.criar-tela-anexo', [
            'arquivos' => $files,
        ]);
    }
}
