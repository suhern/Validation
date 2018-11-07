<?php

namespace Lib\Classes\Validation\Rules;

use Lib\Classes\Validation\Rule;

class Accepted extends Rule
{
    protected $implicit = true;

    protected $message = "The :attribute must be accepted";

    public function check($value)
    {
        $acceptables = ['yes', 'on', '1', 1, true, 'true'];
        return in_array($value, $acceptables, true);
    }

}
