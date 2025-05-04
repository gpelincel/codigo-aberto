<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function index(){
        $projetos = Projeto::with('ong')->get();

        return view('projetos', compact('projetos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $projeto = Projeto::create($request->all());

        return redirect('projeto/'.$projeto->id)->with('status', 'success')->with('message', 'Projeto cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        $projeto = Projeto::with('ong')->findOrFail($id);

        return view('projeto-info', compact('projeto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(projeto $projeto) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        $projeto = Projeto::findOrFail($id);
        $projeto->update($request->all());

        return redirect()->back()->with('status', 'success')->with('message', 'Projeto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        $projeto = Projeto::findOrFail($id);
        $projeto->delete();

        return redirect()->back()->with('status', 'success')->with('message', 'Projeto deletado com sucesso!');
    }
}
