<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|min:0',
            'quantity' => 'required|numeric|min:0'
        ];
    }

    public function messages() {

        return [
            'name.required' => 'Digite um nome',
            'description.required' => 'Digite uma Descrição',
            'price.required' => 'Digite um Preço',
            'price.min' => 'O Preço minimo é Zero',
            'quantity.required' => 'Digite um Quantidade',
            'quantity.numeric' => 'Esse campo é numerico',
            'quantity.min' => 'A Quantidade minima é Zero',
        ];
    }
}
