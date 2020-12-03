<?php

namespace App\Http\Controllers\Admin;

use App\Animal;
use App\Http\Controllers\Controller;
use App\Solicitacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function create($animal)
    {
        $animal = Animal::where('id', $animal)->first();
        return view('admin.solicitacao.create', ['animal' => $animal]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $verificaCPF = DB::table('adocao_solicitacoes')
            ->where([
                ['cpf', '=', $request->cpf],
                ['status', '=', 'adotado'],
            ])
            ->count('status');

        if ($verificaCPF >= 2) {
            $error = "Você já atingiu o limite máximo permitido para adoções de animais";
            return redirect()->route('admin.solicitacao.create', ['animal' => $request->animal])->with('message', 'Você não pode fazer mais de duas solicitações!');
        }

        $solicitacao = new Solicitacao();

        $solicitacao->codigo = "A" . substr(uniqid(rand()), 0, 5);
        $solicitacao->id_animal = $request->animal;

        $solicitacao->nome = $request->nome;
        $solicitacao->sobrenome = $request->sobrenome;
        $solicitacao->cpf = $request->cpf;
        $solicitacao->telefone = $resquest->telefone;
        $solicitacao->email = $request->email;
        $solicitacao->cep = $request->cep;

        $solicitacao->mensagem = $request->mensagem;
        $solicitacao->observacao_by_admin = $request ->observacao;

        $solicitacao->status = 'realizada';

        $solicitacao->save();

        return redirect()->route('admin.solicitacao.index')->with('message', 'Registro criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) 
    {
        $solicitacao = solicitacao::find($id)->first();
       // dd($solicitacao);
       // dd($solicitacao->animal->nome);

        return view('admin.solicitacao.show',compact('solicitacao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitacao = Solicitacao::where('id', $id)->first();
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

        return redirect()->route('admin.solicitacao.index')->with('message', 'Registro atualizado com sucesso!');
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
