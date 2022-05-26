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
                    <div class="row">
                        <div class="col">
                            <h3> {{ $alumno->nombre }} {{ $alumno->apellido }}</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <span><i class="fas fa-id-card"></i> {{ $alumno->dni }}</span> |
                            <span><i class="fas fa-building"></i> {{ $alumno->empresa->nombre_empresa }}</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col ">
                            <h5 class="">Cursos Realizados</h5>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>


                                            <th>Curso</th>
                                            <th>Realizado</th>
                                            <th>Estado</th>


                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr></tr>


                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button type="submit" class="btn btn-primaru btn-sm"><i class="fa fa-fw fa-download"></i> Descargar</button>

                                        </td>
                                        </tr>

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