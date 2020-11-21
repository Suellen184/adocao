<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    // Index
    public function home()
    {
        return view('front.home');
    }

    // Animais
    public function animais()
    {
        return view('front.animais.index');
    }

    public function animalShow()
    {
        return view('front.animais.show');
    }

    public function animalGet()
    {
        //
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
        //
    }

    public function depoimentoObrigado()
    {
        //
    }

    public function depoimentoDo()
    {
        //
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