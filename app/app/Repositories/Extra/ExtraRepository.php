<?php

namespace App\Repositories\Extra;

use App\Models\Extra;
use App\Repositories\BaseRepository;

class ExtraRepository extends BaseRepository
{
    public function getModel()
    {
        return new Extra();
    }
}