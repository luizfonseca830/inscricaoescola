<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class SerieIrmaNoSorteio implements Rule
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
        return $this->validarSerieIrmaoSorteio($value);
    }

    public function validarSerieIrmaoSorteio($serie_irmao_no_sorteio_id): bool
    {

        if (($serie_irmao_no_sorteio_id == null) and $this->validador == 'SIM') {
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
        return 'Favor preencher a série do(a) irmão(a) no sorteio.';
    }
}
