<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Depoimento;
use DB;

class DepoimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $depoimentos = Depoimento::all();
        return view('admin.depoimento.index', ['depoimentos' => $depoimentos]);

    }

    public function inativos()
    {
        $depoimentos = DB::table('adocao_depoimentos')
            ->where('status', '=', 0)
           // ->orWhere('deleted_at', '!=', null)
            ->get();
        return view('admin.depoimento.inativos', ['depoimentos' => $depoimentos]);
    }

    public function ativos()
    {
        $depoimentos = DB::table('adocao_depoimentos')
            ->where('status', '=', 1)
           // ->orWhere('deleted_at', '!=', null)
            ->get();
        return view('admin.depoimento.ativos', ['depoimentos' => $depoimentos]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.depoimento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $depoimento = new Depoimento();
        $depoimento->codigo_solicitacao = $request->codigo_solicitacao;;
        $depoimento->nome = $request->nome;;
        $depoimento->titulo = $request->titulo;
        $depoimento->mensagem = $request->mensagem;
        $depoimento->status = $request->status;
        $depoimento->imagem = $request->file('imagem')->store('depoimentos');

        $depoimento->save();

        return redirect()->route('admin.depoimento.index')->with('message', 'Registro criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Depoimento $depoimento)
    {
        return view('admin.depoimento.show', ['depoimento' => $depoimento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($depoimento)
    {
        $depoimento = Depoimento::where('id', $depoimento)->first();
        return view('admin.depoimento.edit', ['depoimento' => $depoimento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Depoimento $depoimento)
    {           
        $depoimento->codigo_solicitacao = $request->codigo_solicitacao;;
        $depoimento->nome = $request->nome;;
        $depoimento->titulo = $request->titulo;
        $depoimento->mensagem = $request->mensagem;
        $depoimento->tipo = $request->tipo;
        $depoimento->status = $request->status;
        $depoimento->imagem = $request->file('imagem')->store('depoimentos');

        $depoimento->save();

        return redirect()->route('admin.depoimento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Depoimento::destroy($id);
        return redirect()->route('admin.depoimento.index');
    }
}
