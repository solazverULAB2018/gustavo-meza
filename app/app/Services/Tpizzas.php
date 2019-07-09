<?php

namespace App\Services;

use App\Repositories\Tpizza\TpizzaRepository;
use Illuminate\Support\Facades\Auth;

class Tpizzas
{
    protected $tpizzaRepo;

    public function __construct(TpizzaRepository $tpizzaRepository)
    {
        $this->tpizzaRepo = $tpizzaRepository;
    }

    public function get()
    {
        $tpizzasArray[''] = 'Selecciona un tipo de pizza';
        $tpizzas =  $this->tpizzaRepo->getAll();
        foreach ($tpizzas as $tpizza) {
            $tpizzasArray[$tpizza->id] = $tpizza->name;
        }
        return $tpizzasArray;
    }
}