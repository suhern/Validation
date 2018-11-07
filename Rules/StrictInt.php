<?php

namespace Lib\Classes\Validation\Rules;

use Lib\Classes\Validation\Rule;

class StrictInt extends Rule
{
	
	protected $message = "The :attribute must be strict integer type";
	
	public function check($value)
	{
		return is_int($value);
	}
	
}
