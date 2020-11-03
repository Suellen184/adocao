<?php

namespace App\Http\Controllers\Admin;

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
        $solicitacoes = DB::table('adocao_solicitacoes')
                                    ->join('animais', 'adocao_solicitacoes.id_animal', '=', 'animais.id')
                                    ->select('adocao_solicitacoes.*', 'animais.nome as nome_animal')
                                    ->get();
        return view('admin.solicitacao.index', ['solicitacoes' => $solicitacoes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verify()
    {
        return view('admin.solicitacao.verify');
    }

    public function verifyDone(Request $request)
    {
        $cpf = $request->cpf;

        $verificaCPF = DB::table('adocao_solicitacoes')
                        ->where([
                            ['cpf', '=', $cpf],
                            ['status', '=', 'Aprovado'],
                        ])
                        ->count('status');

        if ($verificaCPF < 2){
            return redirect()->action('Admin\SolicitacaoController@create');
        } else {
            return redirect()->action('Admin\SolicitacaoController@verify');
        }
    }

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
        $cpf = $request->cpf;

        $verificaCPF = DB::table('adocao_solicitacoes')
            ->where([
                ['cpf', '=', $cpf],
                ['status', '=', 'Aprovado'],
            ])
            ->count('status');

        if ($verificaCPF < 2){
            $solicitacao = new Solicitacao();

            $solicitacao->codigo = "A" . substr(uniqid(rand()), 0, 5);
            $solicitacao->status = $request->status;

            $solicitacao->nome = $request->nome;
            $solicitacao->sobrenome = $request->sobrenome;
            $solicitacao->idade = $request->idade;
            $solicitacao->cpf = $request->cpf;
            $solicitacao->telefone = $request->telefone;
            $solicitacao->email = $request->email;
            $solicitacao->cep = $request->cep;
            $solicitacao->id_animal = 1;
            $solicitacao->mensagem = 'texto';
            $solicitacao->observacao_by_admin = $request ->observacao;

            $solicitacao->save();

            return redirect()->route('admin.solicitacao.index');
        }

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
