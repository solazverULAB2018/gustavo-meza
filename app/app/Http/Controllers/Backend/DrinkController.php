<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Drink\DrinkRepository;
use App\Http\Requests\Drink\CreateEditRequest;

class DrinkController extends Controller
{
    protected $drinkRepo;

    public function __construct(DrinkRepository $drinkRepository)
    {
        $this->drinkRepo = $drinkRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drinks = $this->drinkRepo->getAll();
        return view('backend.drinks.index')->with('drinks', $drinks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.drinks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEditRequest $request)
    {
        $this->drinkRepo->create($request->all());

        session()->flash('message', [
            'alert' => 'success',
            'text' => 'Bebida creada correctamente.'
        ]);

        return redirect()->route('drinks.index');
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
        $drink = $this->drinkRepo->find($id);

        if (is_null($drink)) {
            return redirect()->route('drinks.index');
        }

        return view('backend.drinks.edit', ['drink' => $drink]);
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
        $drink = $this->drinkRepo->find($id);

        if (is_null($drink)) {
            return redirect()->route('drinks.index');
        }

        $this->drinkRepo->update($drink, $request->all());

        session()->flash('message', [
            'alert' => 'success',
            'text' => 'Bebida actualiza.'
        ]);

        return redirect()->route('drinks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drink = $this->drinkRepo->find($id);

        if (is_null($drink)) {
            return redirect()->route('drinks.index');
        }

        $this->drinkRepo->delete($drink);

        return redirect()->route('drinks.index');
    }
}
