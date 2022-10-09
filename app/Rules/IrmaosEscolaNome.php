<?php

namespace App\Rules;

use Dflydev\DotAccessData\Data;
use Illuminate\Contracts\Validation\Rule;

class IrmaosEscolaNome implements Rule
{

    protected $validador;

    /**
     * @param $validador
     */
    public function __construct($validador)
    {
        $this->validador = mb_strtoupper($validador);
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param String $attribute
     * @param String $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $this->validarCampoIrmaos($value);
    }

    public function validarCampoIrmaos($nome_irmaos_na_escola): bool
    {
        if (($nome_irmaos_na_escola == null) and $this->validador == 'SIM') {
            return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Favor preencher o nome do(a) irmão(a).';
    }
}
