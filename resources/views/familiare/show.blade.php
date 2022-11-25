@extends('layouts.app')

@section('template_title')
    {{ $familiare->name ?? 'Show Familiare' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar familiares</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('familiares.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Departamentos Id:</strong>
                            {{ $familiare->departamento->nombre_departamento }}
                        </div>
                        <div class="form-group">
                            <strong>Municipios Id:</strong>
                            {{ $familiare->municipio->nombre_municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $familiare->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $familiare->Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Parentesco:</strong>
                            {{ $familiare->Parentesco }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
