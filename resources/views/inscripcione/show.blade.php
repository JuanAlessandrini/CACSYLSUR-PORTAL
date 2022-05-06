@extends('layouts.app')

@section('template_title')
{{ $inscripcione->name ?? 'Show Inscripcione' }}
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Ver Inscriptos</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <!-- <div class="float-left">
                        <span class="card-title">Show Inscripcione</span>
                    </div> -->
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('inscripciones.index') }}"> atras</a>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Alumno:</strong>
                        {{ $inscripcione->alumno->nombre }} {{ $inscripcione->alumno->apellido }}
                    </div>
                    <div class="form-group">
                        <strong>Curso:</strong>
                        {{ $inscripcione->nombre_grupo }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection