<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('alumno') }}
            {{ Form::text('alumno_id', $calificacione->alumno_id, ['class' => 'form-control' . ($errors->has('alumno_id') ? ' is-invalid' : ''), 'placeholder' => 'Alumno Id']) }}
            {!! $errors->first('alumno_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('curso') }}
            {{ Form::text('curso_id', $calificacione->curso_id, ['class' => 'form-control' . ($errors->has('curso_id') ? ' is-invalid' : ''), 'placeholder' => 'Curso Id']) }}
            {!! $errors->first('curso_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota') }}
            {{ Form::text('nota', $calificacione->nota, ['class' => 'form-control' . ($errors->has('nota') ? ' is-invalid' : ''), 'placeholder' => 'Nota']) }}
            {!! $errors->first('nota', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>