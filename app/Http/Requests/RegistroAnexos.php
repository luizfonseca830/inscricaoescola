<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroAnexos extends FormRequest
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
            'anexosDocumentos.rgcpf' => 'required|mimes:jpeg,png,jpg,pdf|max:5000',
            'anexosDocumentos.escolaridade' => 'required|mimes:jpeg,png,jpg,pdf|max:5000',
            'anexosDocumentos.defiencia' => 'mimes:jpeg,png,jpg,pdf|max:5000',

            'tecnico.descricoes.*' => 'min:0|max:255',
            'tecnico.instituicao.*' => 'min:0|max:255',
            'tecnico.carga_horario.*' => 'min:0|max:9999|digits_between:0,4',
            'tecnico.anexo_tecnico.*' => 'mimes:jpeg,png,jpg,pdf|max:5000',

            'expe.cargo.*' => 'min:0|max:100',
            'expe.empregador.*' => 'min:0|max:120',
            'expe.nome_contato.*' => 'min:0|max:250',
            'expe.atribuicoes.*' => 'min:0|max:255',
            'expe.anexo_exp.*' => 'mimes:jpeg,png,jpg,pdf|max:5000',

            'esp.descricao.*' => 'min:0|max:255',
            'esp.instituicao.*' => 'min:0|max:255',
            'esp.carga_horario.*' => 'min:0|max:99999|digits_between:0,5',
            'esp.anexo_esp.*' => 'mimes:jpeg,png,jpg,pdf|max:5000',

            'mestrado.descricao.*' => 'min:0|max:255',
            'mestrado.instituicao.*' => 'min:0|max:255',
            'mestrado.carga_horario.*' => 'min:0|max:99999|digits_between:0,5',
            'mestrado.anexo_mestrado.*' => 'mimes:jpeg,png,jpg,pdf|max:5000',

            'doutorado.descricao.*' => 'min:0|max:255',
            'doutorado.instituicao.*' => 'min:0|max:255',
            'doutorado.carga_horario.*' => 'min:0|max:99999|digits_between:0,5',
            'doutorado.anexo_doutorado.*' => 'mimes:jpeg,png,jpg,pdf|max:5000',

            'extra' => 'min:0|max:500'
        ];
    }

    public function messages()
    {
        return ([
            'anexosDocumentos.rgcpf.required' => 'É obrigátorio o preenchimento desse anexo',
            'anexosDocumentos.escolaridade.required' => 'É obrigátorio o preenchimento desse anexo',
            'anexosDocumentos.*.mimes' => 'Esse formato de arquivo não é aceito',
            'anexosDocumentos.*.max' => 'O arquivo é muito grande, tamanho máximo de 5MB',

            'tecnico.descricoes.*.max' => 'O campo não pode ser superior a 255 caracteres.',
            'tecnico.instituicao.*.max' => 'O campo não pode ser superior a 255 caracteres.',
            'tecnico.carga_horario.*.digits_between' => 'O campo só aceita até 4 caracteres.',
            'tecnico.anexo_tecnico.*.mimes' => 'Esse formato de arquivo não é aceito',
            'tecnico.anexo_tecnico.*.max' => 'O arquivo é muito grande, tamanho máximo de 5MB',

            'expe.cargo.*.max' => 'O campo não pode ser superior a 100 caracteres.',
            'expe.empregador.*.max' => 'O campo não pode ser superior a 120 caracteres.',
            'expe.nome_contato.*.max' => 'O campo não pode ser superior a 250 caracteres.',
            'expe.atribuicoes.*.max' => 'O campo não pode ser superior a 255 caracteres.',
            'expe.anexo_exp.*.mimes' => 'Esse formato de arquivo não é aceito',
            'expe.anexo_exp.*.max' => 'O arquivo é muito grande, tamanho máximo de 5MB',

            'esp.descricao.*.max' => 'O campo não pode ser superior a 255 caracteres.',
            'esp.instituicao.*.max' => 'O campo não pode ser superior a 255 caracteres.',
            'esp.carga_horario.*.digits_between' => 'O campo só aceita até 5 caracteres.',
            'esp.anexo_esp.*.mimes' => 'Esse formato de arquivo não é aceito',
            'esp.anexo_esp.*.max' => 'O arquivo é muito grande, tamanho máximo de 5MB',

            'mestrado.descricao.*.max' => 'O campo não pode ser superior a 255 caracteres.',
            'mestrado.instituicao.*.max' => 'O campo não pode ser superior a 255 caracteres.',
            'mestrado.carga_horario.*.digits_between' => 'O campo só aceita até 5 caracteres.',
            'mestrado.anexo_mestrado.*.mimes' => 'Esse formato de arquivo não é aceito',
            'mestrado.anexo_mestrado.*.max' => 'O arquivo é muito grande, tamanho máximo de 5MB',

            'doutorado.descricao.*.max' => 'O campo não pode ser superior a 255 caracteres.',
            'doutorado.instituicao.*.max' => 'O campo não pode ser superior a 255 caracteres.',
            'doutorado.carga_horario.*.digits_between' => 'O campo só aceita até 5 caracteres.',
            'doutorado.anexo_doutorado.*.mimes' => 'Esse formato de arquivo não é aceito',
            'doutorado.anexo_doutorado.*.max' => 'O arquivo é muito grande, tamanho máximo de 5MB',

            'extra.max' => 'O campo só pode ter até 500 caracters',
        ]);
    }
}
