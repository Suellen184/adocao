<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testemunho;
use App\Animal;

class HomeController extends Controller
{
    private $testemunho;

    private $animal;


    public function __construct(Animal $animal, Testemunho $testemunho)
    {
        $this->animal = $animal;
        $this->testemunho = $testemunho;
    }

    /*LISTANDO DOIS ANIMAIS E UM TESTEMUNHO PARA A PÁGINA HOME*/

    public function exibirHome()
    {
        $animais = $this->animal::whereIn('tipo', ['cachorro', 'gato'])->limit(2)
        ->get();

        $testemunhos = $this->testemunho::where('status','1')->orderBy('id_testemunho', 'ASC')->limit(1)
        ->get();
        return view('cliente.inicio', compact('animais', 'testemunhos'));
    }
}
