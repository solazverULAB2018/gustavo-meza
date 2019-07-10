<?php

namespace App\Repositories\Drink;

use App\Models\Drink;
use App\Repositories\BaseRepository;

class DrinkRepository extends BaseRepository
{
    public function getModel()
    {
        return new Drink();
    }
}