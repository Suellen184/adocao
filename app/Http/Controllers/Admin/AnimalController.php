<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Animal;
use App\Http\Requests\Admin\AnimalRequest;


class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animais = Animal::all();
        return view('admin.animal.index', ['animais' => $animais]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.animal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnimalRequest $request)
    {
        $animal = new Animal();

        $animal->nome = $request->nome;
        $animal->cor = $request->cor;
        $animal->raca = $request->raca;
        $animal->data_nascimento = $request->nascimento;
        $animal->tipo = $request->tipo;
        $animal->sexo = $request->sexo;
        $animal->tamanho = $request->tamanho;
        $animal->observacao = $request->observacao;
        $animal->created_by = 1;
        $animal->status = 1;
        $animal->imagem = $request->file('imagem')->store('animais');

        $animal->save();

        return redirect()->route('admin.animal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        return view('admin.animal.show', ['animal' => $animal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($animal)
    {
        $animal = Animal::where('id', $animal)->first();
        return view('admin.animal.edit', ['animal' => $animal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        $animal->nome = $request->nome;
        $animal->cor = $request->cor;
        $animal->raca = $request->raca;
        $animal->data_nascimento = $request->nascimento;
        $animal->tipo = $request->tipo;
        $animal->sexo = $request->sexo;
        $animal->tamanho = $request->tamanho;
        $animal->status = $request->status;
        $animal->imagem = 'imagem';

        $animal->save();

        return redirect()->route('admin.animal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Animal::destroy($id);
        return redirect()->route('admin.animal.index');
    }
}
