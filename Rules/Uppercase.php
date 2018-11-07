<?php

namespace Lib\Classes\Validation\Rules;

use Lib\Classes\Validation\Rule;

class Uppercase extends Rule
{

    protected $message = "The :attribute must be uppercase";

    public function check($value)
    {
    	return mb_strtoupper($value, mb_detect_encoding($value)) === $value;
    }

}
