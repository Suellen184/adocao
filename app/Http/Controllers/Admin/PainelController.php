<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Animal;
Use App\Depoimento;
use DB;
use App\Solicitacao;

class PainelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.painel.index');
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response 
     */
 public function novosDepoimentos()

    {

        
        $qtdAnimaisAtivos = DB::table('animais')
            ->where([
                ['status', '=', 'disponivel'],
            ])
            ->count();

         $qtdAnimaisAdotados = DB::table('animais')
        ->where([
            ['status', '=', 'adotados'],
        ])
        ->count();

        $qtdDepoimentosRecebidos = DB::table('adocao_depoimentos')
        ->where([
            ['status', '=', '0'],
        ])
        ->count();

        $qtdSolicitacoesPendentes = DB::table('adocao_solicitacoes')
        ->where([
            ['status', '=', 'realizada'],
        ])
        ->count();

        $depoimentos = DB::table('adocao_depoimentos')
            ->where('status', '=', 0)
           // ->orWhere('deleted_at', '!=', null)
            ->get();
            
            $solicitacoes = DB::table('adocao_solicitacoes')
            ->where('status', '=', 'realizada')
           // ->orWhere('deleted_at', '!=', null)
            ->get(); 

            //dd($depoimentos);
        return view('admin.painel.index', compact('depoimentos', 'solicitacoes', 'qtdSolicitacoesPendentes','qtdAnimaisAtivos' , 'qtdDepoimentosRecebidos','qtdAnimaisAdotados')); 

        
    }

 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
