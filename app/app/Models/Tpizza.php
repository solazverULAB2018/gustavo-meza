<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tpizza extends Model
{
	protected $fillable = ['name', 'ingredients'];

    /**
     * Get the pizzas for this type.
     */
    public function pizzas()
    {
        return $this->hasMany('App\Models\Pizza');
    }
}
