<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Solicitacao;
use Illuminate\Http\Request;

class SolicitacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitacoes = Solicitacao::all();
        return view('admin.solicitacao.index', ['solicitacoes' => $solicitacoes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.solicitacao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $solicitacao = new Solicitacao();

        $solicitacao->codigo = $request->codigo;
        $solicitacao->nome = $request->nome;
        $solicitacao->sobrenome = $request->sobrenome;
        $solicitacao->idade = $request->idade;
        $solicitacao->cpf = $request->cpf;
        $solicitacao->telefone = $request->telefone;
        $solicitacao->email = $request->email;
        $solicitacao->cep = $request->cep;
        $solicitacao->id_animal = 1;
        $solicitacao->limit = 1;
        $solicitacao->mensagem = $request->mensagem;
        $solicitacao->observacao_by_admin = $request ->observacao_by_admin;

        $solicitacao->save();

        return redirect()->route('admin.solicitacao.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.solicitacao.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitacao = Solicitacao::where('id', $solicitacao)->first();
        return view('admin.solicitacao.edit', ['solicitacao' => $solicitacao]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $solicitacao->codigo = $request->codigo;
        $solicitacao->nome = $request->nome;
        $solicitacao->sobrenome = $request->sobrenome;
        $solicitacao->cpf = $request->cpf;
        $solicitacao->idade = $request->idade;
        $solicitacao->cep = $request->cep;
        $solicitacao->email = $request->email;
        $solicitacao->telefone = $request->telefone;
        $solicitacao->mensagem = $request->mensagem;
        $solicitacao->observacao_by_admin = $request->observacao_by_admin;

        $solicitacao->save();

        return redirect()->route('admin.solicitacao.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Solicitacao::destroy($id);
        return redirect()->route('admin.solicitacao.index');
    }
}
