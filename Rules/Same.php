<?php

namespace Lib\Classes\Validation\Rules;

use Lib\Classes\Validation\Rule;

class Same extends Rule
{

    protected $message = "The :attribute must be same with :field";

    protected $fillable_params = ['field'];

    public function check($value)
    {
        $this->requireParameters($this->fillable_params);

        $field = $this->parameter('field');
        $anotherValue = $this->getAttribute()->getValue($field);

        return $value == $anotherValue;
    }

}
