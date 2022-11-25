@extends('layouts.app')

@section('template_title')
    {{ $paciente->name ?? 'Show Paciente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pacientes.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Sexos Id:</strong>
                            {{ $paciente->sexo->nombre_sexo}}
                        </div>
                        <div class="form-group">
                            <strong>Estadociviles Id:</strong>
                            {{ $paciente->estadocivile->nombre_estado }}
                        </div>
                        <div class="form-group">
                            <strong>Departamentos Id:</strong>
                            {{ $paciente->departamento->nombre_departamento }}
                        </div>
                        <div class="form-group">
                            <strong>Municipios Id:</strong>
                            {{ $paciente->municipio->nombre_municipio}}
                        </div>
                        <div class="form-group">
                            <strong>Familiares Id:</strong>
                            {{ $paciente->familiare->Nombre . " " . $paciente->familiare->Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Nombre:</strong>
                            {{ $paciente->primer_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Nombre:</strong>
                            {{ $paciente->segundo_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tercer Nombre:</strong>
                            {{ $paciente->tercer_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Apellido:</strong>
                            {{ $paciente->primer_apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Apellido:</strong>
                            {{ $paciente->segundo_apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Casada:</strong>
                            {{ $paciente->apellido_casada }}
                        </div>
                        <div class="form-group">
                            <strong>Dui:</strong>
                            {{ $paciente->dui }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $paciente->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $paciente->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $paciente->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
