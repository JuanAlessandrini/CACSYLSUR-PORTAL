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
                    @isset($alumno->nombre)
                    <div class="row">
                        <div class="col">
                            <h3> {{ $alumno->apellido }} {{ $alumno->nombre }}</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <span><i class="fas fa-id-card"></i> {{ $alumno->dni }}</span> |
                            <span><i class="fas fa-building"></i>
                                @isset($alumno->empresa->nombre_empresa)
                                {{ $alumno->empresa->nombre_empresa }}
                                @else
                                Sin empresa
                            </span>
                            @endisset
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
                                            <th>Dictado</th>
                                            <th>Dias para vencimiento</th>
                                            <th>Nota Teorica</th>
                                            <th>Nota Practica</th>


                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cursos as $curso)
                                        @isset($curso->certificado->nombre_curso)
                                        <tr>

                                            <td>{{$curso->certificado->nombre_curso}}</td>
                                            <td>{{$curso->fecha_dictado}}</td>
                                            <td>
                                                @php
                                                $validez = $curso->certificado->validez;
                                                $hoy = new DateTime (date('Y-m-d'));
                                                $fec_venci = new DateTime (date("Y-m-d",strtotime($curso->fecha_dictado . $validez."days" )));
                                                $dias_venci =$hoy->diff($fec_venci);
                                                @endphp
                                                {{$dias_venci->days}} dias
                                            <td>No informada</td>
                                            <td>No informada</td>
                                            <td>
                                                <a href="{{ route('alumnos.download', $alumno->id) }}" class="btn btn-primaru btn-sm"><i class="fa fa-fw fa-download"></i> Descargar</a>
                                            </td>
                                        </tr>
                                        @else
                                        <tr></tr>
                                        @endisset
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="alert alert-danger" role="alert">
                        El alumno buscado no existe
                    </div>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</section>
@endsection