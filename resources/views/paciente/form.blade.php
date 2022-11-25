<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group" >
            {{ Form::label('sexos_id') }}
            {{ Form::select('sexos_id',$sexo ,$paciente->sexos_id, ['class' => 'form-control' . ($errors->has('sexos_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un genero']) }}
            {!! $errors->first('sexos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estadociviles_id') }}
            {{ Form::select('estadociviles_id',$estadocivile, $paciente->estadociviles_id, ['class' => 'form-control' . ($errors->has('estadociviles_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un estado civil']) }}
            {!! $errors->first('estadociviles_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('departamentos_id') }}
            {{ Form::select('departamentos_id',$departamento, $paciente->departamentos_id, ['class' => 'form-control' . ($errors->has('departamentos_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un departamento']) }}
            {!! $errors->first('departamentos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('municipios_id') }}
            {{ Form::select('municipios_id',$municipio, $paciente->municipios_id, ['class' => 'form-control' . ($errors->has('municipios_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un municipio']) }}
            {!! $errors->first('municipios_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Familiar' ) }}
            {{ Form::select('familiares_id',$familiare , $paciente->familiares_id  , ['class' => 'form-control' . ($errors->has('familiares_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un familiar relacionado']) }}
            {!! $errors->first('familiares_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primer_nombre') }}
            {{ Form::text('primer_nombre', $paciente->primer_nombre, ['class' => 'form-control' . ($errors->has('primer_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Primer Nombre']) }}
            {!! $errors->first('primer_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundo_nombre') }}
            {{ Form::text('segundo_nombre', $paciente->segundo_nombre, ['class' => 'form-control' . ($errors->has('segundo_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Nombre']) }}
            {!! $errors->first('segundo_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tercer_nombre') }}
            {{ Form::text('tercer_nombre', $paciente->tercer_nombre, ['class' => 'form-control' . ($errors->has('tercer_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Tercer Nombre']) }}
            {!! $errors->first('tercer_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primer_apellido') }}
            {{ Form::text('primer_apellido', $paciente->primer_apellido, ['class' => 'form-control' . ($errors->has('primer_apellido') ? ' is-invalid' : ''), 'placeholder' => 'Primer Apellido']) }}
            {!! $errors->first('primer_apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundo_apellido') }}
            {{ Form::text('segundo_apellido', $paciente->segundo_apellido, ['class' => 'form-control' . ($errors->has('segundo_apellido') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Apellido']) }}
            {!! $errors->first('segundo_apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_casada') }}
            {{ Form::text('apellido_casada', $paciente->apellido_casada, ['class' => 'form-control' . ($errors->has('apellido_casada') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Casada']) }}
            {!! $errors->first('apellido_casada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" id="DUI">
            {{ Form::label('dui') }}
            {{ Form::text('dui', $paciente->dui, ['class' => 'form-control' . ($errors->has('dui') ? ' is-invalid' : ''), 'placeholder' => 'Dui']) }}
            {!! $errors->first('dui', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_nacimiento') }}
            {{ Form::text('fecha_nacimiento', $paciente->fecha_nacimiento, ['class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nacimiento']) }}
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $paciente->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => ' (503)XXXX-XXXX' ] ) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $paciente->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>