<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Solicitacao;
use Illuminate\Http\Request;
use App\Animal;
use App\Depoimento;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    // Index
    public function home()
    {

        $depoimentos = DB::table('adocao_depoimentos')
            ->where('status', '=', 1)
           // ->orWhere('deleted_at', '!=', null)
            ->get();
        return view('front.home', ['depoimentos' => $depoimentos]);
    }

    // Animais
    public function animais()
    {
        $animais = DB::table('animais')
            ->where([
                ['status', '=', 'disponivel'],
                ['deleted_at', '=', null]
            ])
            ->get();
            //dd($animais);
        return view('front.animais.index', ['animais' => $animais]); 
    }

    public function animalShow($animal)
    {
        $animal = Animal::where('id', $animal)->first();
        return view('front.animais.show', ['animal' => $animal]);
    }

    public function animalGet(Request $request)
    {
        $verificaCPF = DB::table('adocao_solicitacoes')
            ->where([
                ['cpf', '=', $request->cpf],
                ['status', '=', 'adotado'],
            ])
            ->count('status');

        if ($verificaCPF >= 2) {
            $error = "Você já atingiu o limite máximo permitido para adoções de animais";
            return redirect()->route('admin.solicitacao.create', ['animal' => $request->animal]);
        }

        $solicitacao = new Solicitacao();

        $solicitacao->codigo = "A" . substr(uniqid(rand()), 0, 5);
        $solicitacao->id_animal = $request->animal;

        $solicitacao->nome = $request->nome;
        $solicitacao->sobrenome = $request->sobrenome;
        $solicitacao->cpf = $request->cpf;
        $solicitacao->telefone = $request->telefone;
        $solicitacao->email = $request->email;
        $solicitacao->cep = $request->cep;

        $solicitacao->mensagem = $request->mensagem;

        $solicitacao->status = 'realizada';

        $solicitacao->save();

        return redirect()->route('front.home');
    }


    public function ajuda()
    {
        return view('front.ajuda');
    }

    // Solicitações
    public function solicitacao()
    {
        return view('front.solicitacao');
    }

    public function solicitacaoShow()
    {
        //
    }

    public function solicitacaoDo()
    {
        //
    }

    // Depoimentos
    public function depoimento()
    {
        return view('front.depoimento');
    }

    public function depoimentoObrigado()
    {
        
    }

    public function depoimentoDo(Request $request)
    {
        $depoimento = new Depoimento();
        $depoimento->codigo_solicitacao = $request->codigo_solicitacao;;
        $depoimento->nome = $request->nome;;
        $depoimento->titulo = $request->titulo;
        $depoimento->mensagem = $request->mensagem;
        $depoimento->status = 0;

      //  if (request()->hasFile('imagem')) {
           // $file = request()->file('avator')->store('events');
            //Events::Create($request->all() + ['image' => $file]);
          //  dd('entrou');
       // }


      //  dd($request->file('imagem')->store('depoimentos'));
        $depoimento->imagem = $request->file('imagem')->store('depoimentos');

        $depoimento->save();

        return redirect()->route('front.depoimentos.index')->with('message', 'Registro criado com sucesso!');
    }

    // Blog
    public function blog()
    {
        return view('front.blog.index');
    }

    public function blogShow()
    {
        return view('front.blog.article');
    }

    // Demais páginas
    public function sobre()
    {
        return view('front.sobre');
    }

    public function contato()
    {
        return view('front.contato');
    }
    public function contatoDo()
    {
        //
    }

    public function elemento()
    {
        return view('front.elemento');
    }
}