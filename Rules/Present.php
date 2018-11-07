<?php

namespace Lib\Classes\Validation\Rules;

use Lib\Classes\Validation\Rule;

class Present extends Rule
{
    protected $implicit = true;

    protected $message = "The :attribute must be present";

    public function check($value)
    {
        return $this->validation->hasValue($this->attribute->getKey());
    }

}
