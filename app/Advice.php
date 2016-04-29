<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advice extends Model
{
    /**
     * Scope a query to only include the default advice.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDefault($query)
    {
        return $query->where('default', true);
    }
}
