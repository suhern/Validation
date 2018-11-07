<?php

namespace Lib\Classes\Validation\Rules;

use Lib\Classes\Validation\Rule;

class Ipv6 extends Rule
{

    protected $message = "The :attribute is not valid IPv6 Address";

    public function check($value)
    {
        return filter_var($value, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) !== false;
    }

}
