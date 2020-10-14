<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AnimalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'imagem'=>'required',
        'nome'=>'required',
        'cor'=>'required',
        'raca'=>'required',
        'nascimento'=>'required',
        'tamanho'=>'required',
        'tipo'=>'required',
        'sexo'=>'required',
        'status'=>'required',
        'observacao'=>'required',
        ];
    }
}
