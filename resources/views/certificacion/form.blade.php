<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    {{ Form::label('nombre_curso') }}
                    {{ Form::text('nombre_curso', $certificacion->nombre_curso, ['class' => 'form-control' . ($errors->has('nombre_curso') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Curso']) }}
                    {!! $errors->first('nombre_curso', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col">
                @php
                $validez = ['365' =>'1','730'=>'2'];
                $validez2 = [365,730];
                @endphp
                <div class="form-group">
                    {{ Form::label('validez') }}
                    {{ Form::select('validez', $validez, $validez, ['class' => 'form-control' . ($errors->has('validez') ? ' is-invalid' : ''), 'placeholder' => 'Validez']) }}
                    {!! $errors->first('validez', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>



    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>