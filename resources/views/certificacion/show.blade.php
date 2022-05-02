@extends('layouts.app')

@section('template_title')
{{ $certificacion->name ?? 'Show Certificacion' }}
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Mostrar Curso</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <!-- <div class="float-left">
                        <span class="card-title">Show Certificacion</span>
                    </div> -->
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('certificaciones.index') }}"> Atras</a>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Nombre Curso:</strong>
                        {{ $certificacion->nombre_curso }}
                    </div>
                    <div class="form-group">
                        <strong>Slug Curso:</strong>
                        {{ $certificacion->slug_curso }}
                    </div>
                    <div class="form-group">
                        <strong>Validez:</strong>
                        {{ $certificacion->validez }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection