<?php

namespace App\Repositories\Pizza;

use App\Models\Pizza;
use App\Repositories\BaseRepository;

class PizzaRepository extends BaseRepository
{
    public function getModel()
    {
        return new Pizza();
    }
}