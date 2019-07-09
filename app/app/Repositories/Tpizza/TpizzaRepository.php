<?php

namespace App\Repositories\Tpizza;

use App\Models\Tpizza;
use App\Repositories\BaseRepository;

class TpizzaRepository extends BaseRepository
{
    public function getModel()
    {
        return new Tpizza();
    }
}