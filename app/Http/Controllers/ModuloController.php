<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModuloRequest;
use App\Models\Modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $modulos = Modulo::all();
        return view('pages.modulo', compact('modulos'));
    }

    /**
     * Show the form for creating a new modulo.
     *
     */
    public function create()
    {
        return view('pages.modulo-criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ModuloRequest $request)
    {
       $moduloCreate = Modulo::create($request->all());
        return redirect()->route('modulos', [
            'modulo' => $moduloCreate->id
        ])->with([
            'color' => 'success',
            'message' => 'Modulo cadastrado com sucesso!'
        ]);

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
