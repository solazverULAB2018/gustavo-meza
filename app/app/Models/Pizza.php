<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    /**
     * Get the type pizza that owns the pizza.
     */
    public function tpizza()
    {
        return $this->belongsTo('App\Models\Tpizza');
    }
}
