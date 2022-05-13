@extends('layouts.app')

@section('template_title')
{{ $curso->name ?? 'Show Curso' }}
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Grupos</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <!-- <div class="float-left">
                        <span class="card-title">Show Curso</span>
                    </div> -->
                    @can('ver-curso')
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('cursos.index') }}"> Atras</a>
                    </div>
                    @endcan
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Nombre Grupo:</strong>
                        {{ $curso->nombre_grupo }}
                    </div>
                    <div class="form-group">
                        <strong>Mes Dictado:</strong>
                        {{ $curso->mes_dictado }}
                    </div>
                    <div class="form-group">
                        <strong>Año Dictado:</strong>
                        {{ $curso->anio_dictado }}
                    </div>
                    <div class="form-group">
                        <strong>Curso:</strong>
                        {{ $curso->nombre_curso }}
                    </div>
                    <div class="form-group">
                        <strong>Estado:</strong>
                        {{ $curso->estado }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection