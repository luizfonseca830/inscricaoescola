<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class IrmaoSorteio implements Rule
{

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $this->validaSelectIrmaos($attribute, $value);
    }

    public function validaSelectIrmaos($irmaos_no_sorteio): bool
    {
        if ($irmaos_no_sorteio == "Sim") {
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
