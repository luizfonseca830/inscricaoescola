<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class SerieIrmaoNaEscola implements Rule
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
        return $this->validarSerieIrmaos($value);
    }

    public function validarSerieIrmaos($serie_irmao_na_escola_id): bool
    {
        if (($serie_irmao_na_escola_id == null) and $this->validador == 'SIM') {
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
        return 'Favor preencher a série do(a) irmão(a) na escola.';
    }
}
