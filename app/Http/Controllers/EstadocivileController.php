<?php

namespace App\Http\Controllers;

use App\Models\Estadocivile;
use Illuminate\Http\Request;

/**
 * Class EstadocivileController
 * @package App\Http\Controllers
 */
class EstadocivileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadociviles = Estadocivile::paginate();

        return view('estadocivile.index', compact('estadociviles'))
            ->with('i', (request()->input('page', 1) - 1) * $estadociviles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estadocivile = new Estadocivile();
        return view('estadocivile.create', compact('estadocivile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Estadocivile::$rules);

        $estadocivile = Estadocivile::create($request->all());

        return redirect()->route('estadociviles.index')
            ->with('success', 'Estadocivile created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estadocivile = Estadocivile::find($id);

        return view('estadocivile.show', compact('estadocivile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estadocivile = Estadocivile::find($id);

        return view('estadocivile.edit', compact('estadocivile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Estadocivile $estadocivile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estadocivile $estadocivile)
    {
        request()->validate(Estadocivile::$rules);

        $estadocivile->update($request->all());

        return redirect()->route('estadociviles.index')
            ->with('success', 'Estadocivile updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estadocivile = Estadocivile::find($id)->delete();

        return redirect()->route('estadociviles.index')
            ->with('success', 'Estadocivile deleted successfully');
    }
}
