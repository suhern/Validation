<?php

namespace Lib\Classes\Validation\Rules;

use Lib\Classes\Validation\Rule;

class Ipv4 extends Rule
{

    protected $message = "The :attribute is not valid IPv4 Address";

    public function check($value)
    {
        return filter_var($value, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) !== false;
    }

}
