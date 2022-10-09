<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class IrmaoSorteiNome implements Rule
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
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $this->validarCampoIrmaos($value);
    }

    public function validarCampoIrmaos($nome_irmaos_no_sorteio): bool
    {
        if (($nome_irmaos_no_sorteio == null) and $this->validador == 'SIM') {
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
