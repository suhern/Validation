<?php

namespace Lib\Classes\Validation\Rules;

use Lib\Classes\Validation\Rule;

class PureAry extends Rule
{
	
	protected $message = "The :attribute must be pure array";
	
	public function check($value)
	{
		if(!is_array($value)) {
			return false;
		}
		$keys = array_keys($value);
		return array_keys($keys) === $keys;
	}
}
