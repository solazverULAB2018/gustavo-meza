<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * Get the user that owns the customer.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the orders for this customer
     */
    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
}
