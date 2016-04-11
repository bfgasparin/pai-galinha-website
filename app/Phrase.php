<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phrase extends Model
{
    /**
     * Scope a query to only include the default phrase.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDefault($query)
    {
        return $query->where('default', true);
    }
}
