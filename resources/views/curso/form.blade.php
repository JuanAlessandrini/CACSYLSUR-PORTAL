<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre_grupo') }}
            {{ Form::text('nombre_grupo', $curso->nombre_grupo, ['class' => 'form-control' . ($errors->has('nombre_grupo') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Grupo']) }}
            {!! $errors->first('nombre_grupo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mes_dictado') }}
            {{ Form::text('mes_dictado', $curso->mes_dictado, ['class' => 'form-control' . ($errors->has('mes_dictado') ? ' is-invalid' : ''), 'placeholder' => 'Mes Dictado']) }}
            {!! $errors->first('mes_dictado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Año_dictado') }}
            {{ Form::text('anio_dictado', $curso->anio_dictado, ['class' => 'form-control' . ($errors->has('anio_dictado') ? ' is-invalid' : ''), 'placeholder' => 'Año Dictado']) }}
            {!! $errors->first('anio_dictado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Curso') }}
            {{ Form::select('certificacion_id',$certificado, $curso->nombre_grupo, ['class' => 'form-control' . ($errors->has('nombre_curso') ? ' is-invalid' : ''), 'placeholder' => 'seleccionar curso']) }}
            {!! $errors->first('curso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::select('estado',['F' => 'Finalizado', 'A' => 'Activo'], $curso->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado del grupo']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>