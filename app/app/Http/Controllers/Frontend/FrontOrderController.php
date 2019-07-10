<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Tpizza\TpizzaRepository;
use App\Repositories\Drink\DrinkRepository;
use App\Repositories\Extra\ExtraRepository;

class FrontOrderController extends Controller
{
	protected $tpizzaRepo;
	protected $drinkRepo;
	protected $extraRepo;

    public function __construct(TpizzaRepository $tpizzaRepository, DrinkRepository $drinkRepository, ExtraRepository $extraRepository)
    {
        $this->tpizzaRepo = $tpizzaRepository;
        $this->drinkRepo = $drinkRepository;
        $this->extraRepo = $extraRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tpizzas = $this->tpizzaRepo->getAll();
        $extras = $this->extraRepo->getAll();
        $drinks = $this->drinkRepo->getAll();
        return view('frontend.home')->with('tpizzas', $tpizzas)
        	->with('drinks', $drinks)->with('extras', $extras);
    }

    /**
     * Save order
     *
     * @return \Illuminate\Http\Response
     */
    public function saveOrder(Request $request)
    {
        return '=)';
    }

    /**
     * Orders List
     *
     * @return \Illuminate\Http\Response
     */
    public function myOrders(Request $request)
    {
        return view('frontend.orders.index');
    }
}
