<?php

namespace Lib\Classes\Validation\Rules;

use Lib\Classes\Validation\Rule;

class Integer extends Rule
{

    protected $message = "The :attribute must be integer";

    public function check($value)
    {
        return filter_var($value, FILTER_VALIDATE_INT) !== false;
    }

}
