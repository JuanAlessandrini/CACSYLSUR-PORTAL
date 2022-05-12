@extends('layouts.app')

@section('template_title')
{{ $calificacione->name ?? 'Show Calificacione' }}
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Calificacion</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">Calificacion</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('calificaciones.index') }}"> Back</a>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Alumno</strong>
                        {{ $calificacione->alumno_id }}
                    </div>
                    <div class="form-group">
                        <strong>Curso</strong>
                        {{ $calificacione->curso_id }}
                    </div>
                    <div class="form-group">
                        <strong>Nota</strong>
                        {{ $calificacione->nota }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection