<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    {{ Form::label('alumno') }}
                    {{ Form::select('alumno_id',$alumno, $inscripcione, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
                    {!! $errors->first('alumno_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {{ Form::label('curso') }}
                    {{ Form::select('curso_id',$curso, $inscripcione, ['class' => 'form-control' . ($errors->has('nombre_curso') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
                    {!! $errors->first('curso_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {{ Form::label('fecha_dictado') }}
                    {{ Form::date('fecha_dictado',\Carbon\Carbon::now(),['class'=>'form-control'] ) }}
                    {!! $errors->first('fecha_dictado', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
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