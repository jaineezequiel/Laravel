<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoFormResquest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => ['required', 'min:3'],
            'quantidade' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nome.*' => 'O campo nome é obrigatório e precisa de pelo menos 3 caracteres',
            'quantidade.*' => 'O campo quantidade é obrigatório',
        ];
    }
}
