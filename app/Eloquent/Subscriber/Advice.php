<?php

namespace App\Eloquent\Subscriber;

use App\Advice;

/**
* Advice Subscriber registers all listeners to Advice eloquent model events
* @author Bruno Gasparin <bruno.gasparin@oi.net.br>
*/
class Advice
{
	public function register()
	{
		Advice::creating($this->onlyOneDefaultAdvice());
	}
	
	/**
	 * Functions that manages the default Advice into the data source
	 * Only one default Advice is allowed.
	 * 
	 * @return Clousure
	 */
	protected function onlyOneDefaultAdvice()
	{
		return function ($user) {
            if ($user->default && $lastDefaultAdvice = Advice::where('default', true)->first()) {
                $lastDefaultAdvice->default = false;
                $lastDefaultAdvice->save();
            }
        };
	}
}