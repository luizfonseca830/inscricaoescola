<?php

namespace App\Http\Controllers;

use App\Http\Requests\EscolaridadeRequest;
use App\Models\Escolaridade;
use App\Models\Modulo;
use Illuminate\Support\Facades\DB;

class EscolaridadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escolaridades = Escolaridade::all();
        return view('pages.escolaridade', compact('escolaridades'));
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


    public function confirma($id)
    {
        $escolaridade = Escolaridade::findOrFail($id);
        return view('pages.delete-escolaridade', compact('escolaridade'));
    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();
            $escolaridade = Escolaridade::find($id);
            if(count($escolaridade->pessoas) > 0){
                return redirect()->route('escolaridades')->with('error', 'Essa série não poder ser deletado!');
            }

            if ($escolaridade->delete()) {
                session()->put('sucess', 'Serie deletada com sucesso!');
            } else {
                session()->put('error', 'Essa Serie não poder ser deletado!');
            }
            DB::commit();
            return redirect()->route('escolaridades');
        } catch (\Exception $e) {
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
        $escolaridade = Escolaridade::findOrFail($id);
        $modulos = Modulo::all();

        return view('pages.escolaridade-edit', [
            'modulos' => $modulos,
            'escolaridade' => $escolaridade
        ]);
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
    public function update(EscolaridadeRequest $request, $id)
    {
        $escolaridade = Escolaridade::findOrFail($id);

        $escolaridade->update([
            $escolaridade->nivel_escolaridade = $request->nivel_escolaridade,
            $escolaridade->modulo_id = $request->modulo_id]);
        session()->put('sucess', 'Escolaridade Editada com Sucesso!');
        return redirect()->route('escolaridades', $id);
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
