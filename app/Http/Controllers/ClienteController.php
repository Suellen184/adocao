<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    
    /*RETORNA VIEW DO MENU*/

    public function menu()
    {
      
        return view('layout.menu');

    }

    /*RETORNA VIEW DO RODEAPÉ*/

    public function footer()
    {
      
        return view('layout.footer');

    }
    
     /*RETORNA VIW SOLICITAÇÃO*/

    public function solicitacao(){

        return view('cliente.solicitacao');
    }

    public function ajuda(){
        
        return view('cliente.ajuda');
    }


    /*CRIANDO A VARIÁVEL CLIENTE E USANDO O MÉTODO CONSTRUTOR*/

    private $cliente;

    public function __construct(Cliente $cliente)
{
    $this->cliente = $cliente;
}


/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
/* FUNÇÃO QUE RECEBE OS DADOS DOS CLIENTES E SALVANDO NO BANCO, EXIBINDO MENSAGENS ONDE O CAMPO É OBRIGATÓRIO.*/

public function store(Request $request)
{ 
    $messages = [
            'nome.required' => 'O campo nome é obrigatório!',
            'email.required' => 'O campo email é obrigatório!',
            'data.required' => 'O campo data é obrigatório!',
            'telefone.required' => 'O campo telefone é obrigatório!',
            'endereco.required' => 'O campo endereco é obrigatório!',
            'bairro.required' => 'O campo bairro é obrigatório!',
            'observacao.required' => 'O campo observação é obrigatório!',
        ];

    $validatedData = $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'data' => 'required',
            'telefone' => 'required',
            'endereco' => 'required',
            'bairro' => 'required',
            'observacao' => 'required',

        ], $messages);

    $cliente = $this ->cliente;
    $cliente ->nome =$request->nome;
    $cliente ->email = $request ->email;
    $cliente ->data_nascimento = $request ->data;
    $cliente ->telefone = $request ->telefone;
    $cliente ->rua =$request ->endereco;
    $cliente ->bairro = $request ->bairro;
    $cliente ->cidade = $request ->cidade;
    $cliente ->estado = $request ->estado;
    $cliente ->observacao = $request ->observacao;
    $cliente -> save();
    return redirect()->route('solicitacao')->with('message', 'Registro criado com sucesso!');
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
