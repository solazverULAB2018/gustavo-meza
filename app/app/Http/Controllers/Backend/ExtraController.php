<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Extra\ExtraRepository;
use App\Http\Requests\Extra\CreateEditRequest;

class ExtraController extends Controller
{
    protected $extraRepo;

    public function __construct(ExtraRepository $extraRepository)
    {
        $this->extraRepo = $extraRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extras = $this->extraRepo->getAll();
        return view('backend.extras.index')->with('extras', $extras);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.extras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEditRequest $request)
    {
        $this->extraRepo->create($request->all());

        session()->flash('message', [
            'alert' => 'success',
            'text' => 'Extra creado correctamente.'
        ]);

        return redirect()->route('extras.index');
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
        $extra = $this->extraRepo->find($id);

        if (is_null($extra)) {
            return redirect()->route('extras.index');
        }

        return view('backend.extras.edit', ['extra' => $extra]);
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
        $extra = $this->extraRepo->find($id);

        if (is_null($extra)) {
            return redirect()->route('extras.index');
        }

        $this->extraRepo->update($extra, $request->all());

        session()->flash('message', [
            'alert' => 'success',
            'text' => 'Extra actualizo.'
        ]);

        return redirect()->route('extras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $extra = $this->extraRepo->find($id);

        if (is_null($extra)) {
            return redirect()->route('extras.index');
        }

        $this->extraRepo->delete($extra);

        return redirect()->route('extras.index');
    }
}
