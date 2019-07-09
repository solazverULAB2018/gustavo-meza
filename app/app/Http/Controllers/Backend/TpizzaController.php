<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Tpizza\TpizzaRepository;
use App\Http\Requests\Tpizza\CreateRequest;
use App\Http\Requests\Tpizza\EditRequest;

class TpizzaController extends Controller
{
    protected $tpizzaRepo;

    public function __construct(TpizzaRepository $tpizzaRepository)
    {
        $this->tpizzaRepo = $tpizzaRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tpizzas = $this->tpizzaRepo->getAll();
        return view('backend.tpizzas.index')->with('tpizzas', $tpizzas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.tpizzas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $this->tpizzaRepo->create($request->all());

        session()->flash('message', [
            'alert' => 'success',
            'text' => 'Tipo de Pizza creada correctamente.'
        ]);

        return redirect()->route('tpizzas.index');
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
        $tpizza = $this->tpizzaRepo->find($id);

        if (is_null($tpizza)) {
            return redirect()->route('tpizzas.index');
        }

        return view('backend.tpizzas.edit', ['tpizza' => $tpizza]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $id)
    {
        $tpizza = $this->tpizzaRepo->find($id);

        if (is_null($tpizza)) {
            return redirect()->route('tpizzas.index');
        }

        $this->tpizzaRepo->update($tpizza, $request->all());

        return redirect()->route('tpizzas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tpizza = $this->tpizzaRepo->find($id);

        if (is_null($tpizza)) {
            return redirect()->route('tpizzas.index');
        }

        $this->tpizzaRepo->delete($tpizza);

        return redirect()->route('tpizzas.index');
    }
}
