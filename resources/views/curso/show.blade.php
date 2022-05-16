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
                    <br>
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
                    <div class="row">
                        <div class="col">
                            <h5 class="display-5">Alumnos</h5>
                            <a class="btn btn-success" href="{{ route('inscripciones.create') }}"> Agregar Alumno</a>
                            {{-- <a class="btn btn-success" data-toggle="modal" data-target="#exampleModal"  data-whatever="@mdo""> Agregar Alumno</a> --}}
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Dni</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alumnos as $alumno)
                                        <tr>


                                            <td>{{ $alumno->nombre }}</td>
                                            <td>{{ $alumno->apellido }}</td>
                                            <td>{{ $alumno->dni }}</td>


                                            <td>
                                                <form action="{{ route('inscripciones.destroy',$alumno->INSID) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('inscripciones.show',$alumno->INSID) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('inscripciones.edit',$alumno->INSID) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
    
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

{{-- modal crear --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Alumno</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('inscripciones.store') }}">
              @csrf
              
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div>

@endsection