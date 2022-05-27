@extends('layouts.app')

@section('template_title')
    {{ $archivo->name ?? 'Show Archivo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Archivo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('archivos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Alumno Id:</strong>
                            {{ $archivo->alumno_id }}
                        </div>
                        <div class="form-group">
                            <strong>Curso Id:</strong>
                            {{ $archivo->curso_id }}
                        </div>
                        <div class="form-group">
                            <strong>Certificado:</strong>
                            {{ $archivo->certificado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
