<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;


class SabiaController extends Controller
{
    private $animal;

    public function __construct(Animal $animal)
    {
        $this->animal = $animal;
    }

    public function voceSabia(){

     $animal = $this->animal::COUNT('animal_id')->get();

        return view('cliente.sabia', ['animal'=> $animal]);

    }
}
