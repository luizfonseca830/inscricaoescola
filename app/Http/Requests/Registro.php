<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\MessageBag;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class Registro extends FormRequest
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
            //
            'endereco' => 'required|string|max:50',
            'bairro' => 'required|string|max:50',
            'cep' => 'required|formato_cep',
            'idade' => 'required|numeric|digits_between:1,5|min:0',
            'nome_completo' => 'required|string|min:10|max:50',
            'cpf' => 'required|cpf|formato_cpf',
            'data_nascimento' => 'required|date',
            'telefone' => 'required|celular_com_ddd',
            'responsavel' => 'required|string|min:10|max:50',
            'email' => 'required|string|max:100',
            'escolaridade' => 'required|exists:escolaridade,id',
        ];
    }

    public function messages()
    {
        return ([
            'nome_completo.required' => 'O campo nome é obrigatório.',
            'responsavel.required' => 'O campo reponsável é obrigatório.',
            'cpf.required' => 'O cpf é obrigatório',
            'telefone.required ' => 'O telefone é obrigatório',
            'endereco.required' => 'O campo endereço é obrigatório. ',
            'cep.formato_cep' => 'O campo cep não possui um formato válido de CEP. Ex (99999-999 ou 99.999-999)',
            'idade.required' => 'O campo número é obrigatório',
            'idade.numeric' => 'Só é aceito números.',
            'email.required' => 'O campo de email é obrigatório',
            'escolaridade.exists' => 'Você deve selecionar um nível de escolaridade',

        ]); // TODO: Change the autogenerated stub
    }
}
