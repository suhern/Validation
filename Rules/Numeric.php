<?php

namespace Lib\Classes\Validation\Rules;

use Lib\Classes\Validation\Rule;

class Numeric extends Rule
{

    protected $message = "The :attribute must be numeric";

    public function check($value)
    {
        return is_numeric($value);
    }

}
