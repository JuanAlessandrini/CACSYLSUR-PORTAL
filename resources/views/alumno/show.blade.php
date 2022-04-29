@extends('layouts.app')

@section('template_title')
{{ $alumno->name ?? 'Show Alumno' }}
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Alumnos</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title"></span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('alumnos.index') }}">Atras</a>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Nombre:</strong>
                        {{ $alumno->nombre }}
                    </div>
                    <div class="form-group">
                        <strong>Apellido:</strong>
                        {{ $alumno->apellido }}
                    </div>
                    <div class="form-group">
                        <strong>Dni:</strong>
                        {{ $alumno->dni }}
                    </div>
                    <div class="form-group">
                        <strong>Empresa:</strong>
                        {{ $alumno->empresa->nombre_empresa }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection