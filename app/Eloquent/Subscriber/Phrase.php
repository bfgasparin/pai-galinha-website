<?php

namespace App\Eloquent\Subscriber;

use App\Phrase;

/**
* Phrase Subscriber registers all listeners to Phrase eloquent model events
* @author Bruno Gasparin <bruno.gasparin@oi.net.br>
*/
class Phrase
{
	public function register()
	{
		Phrase::creating($this->onlyOneDefaultPhrase());
	}
	
	/**
	 * Functions that manages the default Phrase into the data source
	 * Only one default phrase is allowed.
	 * 
	 * @return Clousure
	 */
	protected function onlyOneDefaultPhrase()
	{
		return function ($user) {
            if ($user->default && $lastDefaultPhrase = Phrase::where('default', true)->first()) {
                $lastDefaultPhrase->default = false;
                $lastDefaultPhrase->save();
            }
        };
	}
}