<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('alumno') }}
            {{ Form::select('alumno_id',$alumno, $inscripcione, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
            {!! $errors->first('alumno_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grupo') }}
            {{ Form::select('grupo_id',$curso, $inscripcione->nombre_grupo, ['class' => 'form-control' . ($errors->has('nombre_grupo') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
            {!! $errors->first('grupo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('certificado') }}
            {{ Form::file('certificado', ['class' => 'form-control-file' . ($errors->has('nombre_grupo') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
            {!! $errors->first('certificado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">guardar</button>
    </div>
</div>