<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Depoimento;


class TestemunhoController extends Controller
{
    private $testemunho;

    public function __construct(Depoimento $testemunho)
    {
        $this->testemunho = $testemunho;
    }


    public function exibir()
    {

        $testemunhos = $this->testemunho::where('status', '1')->orderBy('id_testemunho', 'DESC')->get();
        return view('cliente.testemunho', compact('testemunhos'));

    }


    public function store(Request $request)
    {
        $messages = [
            'titulo.required' => 'O campo nome é obrigatório!',
            'texto.required' => 'O campo texto é obrigatório!',
            'imagem.required' => 'O campo imagem é obrigatório!',
        ];

        $validatedData = $request->validate([
            'titulo' => 'required',
            'texto' => 'required',
            'imagem' => 'required',
        ], $messages);

        $testemunho = $this->testemunho;
        $testemunho->titulo = $request->titulo;
        $testemunho->titulo = $request->texto;
        $testemunho->imagem = $request->imagem;
        $testemunho->save();
        return redirect()->route('testemunho')->with('message', 'Depoimento enviado com sucesso criado com sucesso!');

    }
}
