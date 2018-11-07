<?php

namespace Lib\Classes\Validation\Rules;

use Lib\Classes\Validation\Rule;

class Ip extends Rule
{

    protected $message = "The :attribute is not valid IP Address";

    public function check($value)
    {
        return filter_var($value, FILTER_VALIDATE_IP) !== false;
    }

}
