@extends('layouts.app')

@section('template_title')
    {{ $expediente->name ?? 'Show Expediente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Expediente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('expedientes.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Establecimientos Id:</strong>
                            {{ $expediente->establecimiento->nombre_establecimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Pacientes Id:</strong>
                            {{ $expediente->paciente->primer_nombre}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
