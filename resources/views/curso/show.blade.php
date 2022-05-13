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

                    <div class="row">
                        <div class="col">
                            <h4>Grupo: {{ $curso->nombre_grupo }}</h4>
                        </div>
                        <div class="col">
                            <h4>Curso: {{ $curso->certificado->nombre_curso }}</h4>
                        </div>
                    </div>
                    <div class="clearfix"><br></div>

                    <h5 class="display-5">Alumnos</h5>
                    <div class="row">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>No</th>

                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Dni</th>
                                            <th>Empresa</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alumnos as $alumno)
                                        <tr>


                                            <td>{{ $alumno->nombre }}</td>
                                            <td>{{ $alumno->apellido }}</td>
                                            <td>{{ $alumno->dni }}</td>


                                            <td>
                                                <!--  -->
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection