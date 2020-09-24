<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;

class AnimalController extends Controller
{
    private $animal;

    public function __construct(Animal $animal)
    {
        $this->animal = $animal;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*LISTANDO OS ANIMAIS PARA A PÁGINA DE ADOÇÃO*/

    public function cachorro()
    {
        $animais = $this->animal::where('tipo', "cachorro")
        ->get();
        return view('cliente.cachorro', compact('animais'));
    }
    
    public function gato()
    {
        $animais = $this->animal::where('tipo', "gato")
        ->get();
        return view('cliente.gato', compact('animais'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     *
     */

    public function admin()
    {
        $animais = $this->animal::where('tipo', 'cachorro')->orderBy('id','DESC')->get();
        return view('admin.animal.index', compact('animais'));
    }
    
    public function create()
    {
        return view('admin.animal.create');
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
    public function show()
    {
        $animais = $this->animal::where('tipo', 'cachorro')->orderBy('id','DESC')->get();
        return view('admin.animal.show', compact('animais'));
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
