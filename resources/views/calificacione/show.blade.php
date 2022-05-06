@extends('layouts.app')

@section('template_title')
    {{ $calificacione->name ?? 'Show Calificacione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Calificacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('calificaciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Alumno Id:</strong>
                            {{ $calificacione->alumno_id }}
                        </div>
                        <div class="form-group">
                            <strong>Curso Id:</strong>
                            {{ $calificacione->curso_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nota:</strong>
                            {{ $calificacione->nota }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
