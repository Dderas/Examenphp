@extends('layouts.app')

@section('template_title')
    {{ $estadocivile->name ?? 'Show Estadocivile' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Estadocivile</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estadociviles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Estado:</strong>
                            {{ $estadocivile->nombre_estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
