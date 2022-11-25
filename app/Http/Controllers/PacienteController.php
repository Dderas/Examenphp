<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\Sexo;
use App\Models\Estadocivile;
use App\Models\Familiare;

/**
 * Class PacienteController
 * @package App\Http\Controllers
 */
class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::paginate();

        return view('paciente.index', compact('pacientes'))
            ->with('i', (request()->input('page', 1) - 1) * $pacientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paciente = new Paciente();


        $sexo= Sexo::pluck('nombre_sexo', 'id');
        $estadocivile= Estadocivile::pluck('nombre_estado', 'id');
        $departamento= Departamento::pluck('nombre_departamento', 'id');
        $municipio= Municipio::pluck('nombre_municipio', 'id');
        // $familiare= Familiare::pluck('Nombre', 'id');

        $familiare = Familiare::select("id", familiare::raw("CONCAT(Nombre,' ',Apellido) as full_name"))
        ->pluck('full_name', 'id');

        return view('paciente.create', compact('paciente','sexo','estadocivile','departamento','municipio','familiare'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Paciente::$rules);

        $paciente = Paciente::create($request->all());

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::find($id);

        return view('paciente.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);

        $sexo= Sexo::pluck('nombre_sexo', 'id');
        $estadocivile= Estadocivile  ::pluck('nombre_estado', 'id');
        $departamento= Departamento::pluck('nombre_departamento', 'id');
        $municipio= Municipio::pluck('nombre_municipio', 'id');
        // $familiare= Familiare::pluck('Nombre', 'id');
        $familiare = Familiare::select("id", familiare::raw("CONCAT(Nombre,' ',Apellido) as full_name"))
        ->pluck('full_name', 'id');
       

        return view('paciente.edit', compact('paciente','sexo','estadocivile','departamento','municipio','familiare'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Paciente $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        request()->validate(Paciente::$rules);

        $paciente->update($request->all());

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $paciente = Paciente::find($id)->delete();

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente deleted successfully');
    }
}
