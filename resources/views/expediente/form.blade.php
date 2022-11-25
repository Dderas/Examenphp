<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('establecimientos_id') }}
            {{ Form::select('establecimientos_id',$establecimiento, $expediente->establecimientos_id, ['class' => 'form-control' . ($errors->has('establecimientos_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un establecimiento']) }}
            {!! $errors->first('establecimientos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pacientes_id') }}
            {{ Form::select('pacientes_id',$paciente, $expediente->pacientes_id, ['class' => 'form-control' . ($errors->has('pacientes_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un paciente']) }}
            {!! $errors->first('pacientes_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>