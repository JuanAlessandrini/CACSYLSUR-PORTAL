<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('alumno_id') }}
            {{ Form::text('alumno_id', $archivo->alumno_id, ['class' => 'form-control' . ($errors->has('alumno_id') ? ' is-invalid' : ''), 'placeholder' => 'Alumno Id']) }}
            {!! $errors->first('alumno_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('curso_id') }}
            {{ Form::text('curso_id', $archivo->curso_id, ['class' => 'form-control' . ($errors->has('curso_id') ? ' is-invalid' : ''), 'placeholder' => 'Curso Id']) }}
            {!! $errors->first('curso_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('certificado') }}
            {{ Form::text('certificado', $archivo->certificado, ['class' => 'form-control' . ($errors->has('certificado') ? ' is-invalid' : ''), 'placeholder' => 'Certificado']) }}
            {!! $errors->first('certificado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>