<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModuloRequest;
use App\Models\Modulo;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

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

    public function confirma($id)
    {
        $modulo = Modulo::findOrFail($id);
        return view('pages.delete-modulo', compact('modulo'));
    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();
            $modulo = Modulo::find($id);

            if ($modulo->delete()) {
                session()->put('sucess', 'Escolaridade deletada com sucesso!');
            } else {
                session()->put('error', 'Essa Escolaridade não poder ser deletado!');
            }
            DB::commit();
            return redirect()->route('modulos');
        } catch (QueryException $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(($e->getCode() === '23000') ? 'Escolaridade sendo usada.' : 'teste');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modulo = Modulo::findOrFail($id);

        return view('pages.modulo-edit', [
            'modulo' => $modulo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ModuloRequest $request, $id)
    {
        $modulo = Modulo::findOrFail($id);
        $modulo->update([
            $modulo->descricao = $request->descricao]);
        session()->put('sucess', 'Modulo Editado com Sucesso!');
        return redirect()->route('modulos', $id);
    }
}
