<?php

namespace Lib\Classes\Validation\Rules;

use Lib\Classes\Validation\Rule;

class Digits extends Rule
{

    protected $message = "The :attribute must be numeric and must have an exact length of :length";

    protected $fillable_params = ['length'];

    public function check($value)
    {
        $this->requireParameters($this->fillable_params);

        $length = (int) $this->parameter('length');

        return ! preg_match('/[^0-9]/', $value)
                    && strlen((string) $value) == $length;
    }

}
