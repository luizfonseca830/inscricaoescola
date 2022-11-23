<?php

namespace App\Http\Controllers;

use App\Http\Requests\EscolaridadeRequest;
use App\Models\Escolaridade;
use App\Models\Modulo;
use Illuminate\Http\Request;

class EscolaridadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modulos = Modulo::all();
        $escolaridades = Escolaridade::all();
        return view('pages.escolaridade', compact('modulos', 'escolaridades'));
    }

    /**
     * Show the form for creating a new escolaridade.
     *
     */
    public function create()
    {
        $modulos = Modulo::all();
        return view('pages.escolaridade-criar', [
            'modulos' => $modulos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(EscolaridadeRequest $request)
    {
        $escolaridade = new Escolaridade();
        $escolaridade->nivel_escolaridade = $request->nivel_escolaridade;
        $escolaridade->modulo_id = $request->modulo_id;
        $escolaridade->save();
        return redirect()->route('escolaridades');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
