<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_empresa') }}
            {{ Form::text('nombre_empresa', $empresa->nombre_empresa, ['class' => 'form-control' . ($errors->has('nombre_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Empresa']) }}
            {!! $errors->first('nombre_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cuit') }}
            {{ Form::text('cuit', $empresa->cuit, ['class' => 'form-control' . ($errors->has('cuit') ? ' is-invalid' : ''), 'placeholder' => 'Cuit','maxlength'=>'11']) }}
            {!! $errors->first('cuit', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>