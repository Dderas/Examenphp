<?php

namespace App\Http\Controllers;

use App\Models\Establecimiento;
use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Municipio;

/**
 * Class EstablecimientoController
 * @package App\Http\Controllers
 */
class EstablecimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $establecimientos = Establecimiento::paginate();

        return view('establecimiento.index', compact('establecimientos'))
            ->with('i', (request()->input('page', 1) - 1) * $establecimientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $establecimiento = new Establecimiento();

        $departamento= Departamento::pluck('nombre_departamento', 'id');
        $municipio= Municipio::pluck('nombre_municipio', 'id');

        return view('establecimiento.create', compact('establecimiento','departamento','municipio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Establecimiento::$rules);

        $establecimiento = Establecimiento::create($request->all());

        return redirect()->route('establecimientos.index')
            ->with('success', 'Establecimiento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $establecimiento = Establecimiento::find($id);

        return view('establecimiento.show', compact('establecimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $establecimiento = Establecimiento::find($id);

        
        $departamento= Departamento::pluck('nombre_departamento', 'id');
        $municipio= Municipio::pluck('nombre_municipio', 'id');

        return view('establecimiento.edit', compact('establecimiento','departamento','municipio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Establecimiento $establecimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Establecimiento $establecimiento)
    {
        request()->validate(Establecimiento::$rules);

        $establecimiento->update($request->all());

        return redirect()->route('establecimientos.index')
            ->with('success', 'Establecimiento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $establecimiento = Establecimiento::find($id)->delete();

        return redirect()->route('establecimientos.index')
            ->with('success', 'Establecimiento deleted successfully');
    }
}
