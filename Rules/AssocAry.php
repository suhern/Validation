<?php

namespace Lib\Classes\Validation\Rules;

use Lib\Classes\Validation\Rule;

class AssocAry extends Rule
{
	
	protected $message = "The :attribute must be associative array";
	
	protected $fillable_params = ['allow_empty'];
	
	public function check($value)
	{
		if(!is_array($value)) {
			return false;
		}

		//若有傳參數
		if(!empty($this->params['allow_empty']) && empty($value)) {
			return true;
		}
		$keys = array_keys($value);
		return array_keys($keys) !== $keys;
	}
	
}
