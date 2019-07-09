<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
	protected $fillable = ['tpizza_id', 'size', 'price'];

    /**
     * Get the type pizza that owns the pizza.
     */
    public function tpizza()
    {
        return $this->belongsTo('App\Models\Tpizza');
    }
}
