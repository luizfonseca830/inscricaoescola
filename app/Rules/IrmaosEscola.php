<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class IrmaosEscola implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param mixed $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $this->validaSelectIrmaos($value);
    }

    public function validaSelectIrmaos($irmaos_na_escola): bool
    {
        if ($irmaos_na_escola == "Sim") {
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
