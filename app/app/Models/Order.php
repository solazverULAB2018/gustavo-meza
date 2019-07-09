<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * Get the customer that owns the order.
     */
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }
}
