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
        $pessoasdb = Pessoa::all();
        $pessoas = [];
        foreach ($pessoasdb as $pessoa){
                $pessoas[] = $pessoa;
        }
        return view('pages.visualizacao')->with('pessoas', $pessoas);
    }

    public function filter()
    {
        return view('pages.filter');
    }
}
