<?php

namespace Lib\Classes\Validation\Rules;

use Lib\Classes\Validation\Rule;

class Json extends Rule
{

    protected $message = "The :attribute must be a valid JSON string";

    public function check($value)
    {
        if (! is_string($value) || empty($value)) {
            return false;
        }
        
        json_decode($value);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return false;
        }

        return true;
    }

}