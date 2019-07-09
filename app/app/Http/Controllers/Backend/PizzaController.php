<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Pizza\PizzaRepository;
use App\Http\Requests\Pizza\CreateEditRequest;

class PizzaController extends Controller
{
    protected $pizzaRepo;

    public function __construct(PizzaRepository $pizzaRepository)
    {
        $this->pizzaRepo = $pizzaRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizzas = $this->pizzaRepo->getAll();
        return view('backend.pizzas.index')->with('pizzas', $pizzas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pizzas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEditRequest $request)
    {
        $this->pizzaRepo->create($request->all());

        session()->flash('message', [
            'alert' => 'success',
            'text' => 'Pizza creada correctamente.'
        ]);

        return redirect()->route('pizzas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pizza = $this->pizzaRepo->find($id);

        if (is_null($pizza)) {
            return redirect()->route('pizzas.index');
        }

        return view('backend.pizzas.edit', ['pizza' => $pizza]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateEditRequest $request, $id)
    {
        $pizza = $this->pizzaRepo->find($id);

        if (is_null($pizza)) {
            return redirect()->route('pizzas.index');
        }

        $this->pizzaRepo->update($pizza, $request->all());

        session()->flash('message', [
            'alert' => 'success',
            'text' => 'Pizza actualiza.'
        ]);

        return redirect()->route('pizzas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pizza = $this->pizzaRepo->find($id);

        if (is_null($pizza)) {
            return redirect()->route('pizzas.index');
        }

        $this->pizzaRepo->delete($pizza);

        return redirect()->route('pizzas.index');
    }
}
