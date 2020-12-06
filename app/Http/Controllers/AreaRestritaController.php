<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AreaRestritaController extends Controller
{
    public function index()
    {
        //


        $pessoas = Pessoa::where('id')->paginate(40);
        return view('pages.visualizacao')->with('pessoas', $pessoas);
    }
}
