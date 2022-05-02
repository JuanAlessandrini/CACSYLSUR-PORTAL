<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_curso') }}
            {{ Form::text('nombre_curso', $certificacion->nombre_curso, ['class' => 'form-control' . ($errors->has('nombre_curso') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Curso']) }}
            {!! $errors->first('nombre_curso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('slug_curso') }}
            {{ Form::text('slug_curso', $certificacion->slug_curso, ['class' => 'form-control' . ($errors->has('slug_curso') ? ' is-invalid' : ''), 'placeholder' => 'Slug Curso']) }}
            {!! $errors->first('slug_curso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('validez') }}
            {{ Form::text('validez', $certificacion->validez, ['class' => 'form-control' . ($errors->has('validez') ? ' is-invalid' : ''), 'placeholder' => 'Validez']) }}
            {!! $errors->first('validez', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>