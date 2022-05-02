@extends('layouts.app')

@section('template_title')
Certificacion
@endsection

@section('content')
<div class="section">
    <div class="section-header">
        <h3 class="page__heading">Cursos</h3>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <!-- <span id="card_title">
                            {{ __('Certificacion') }}
                        </span> -->

                        <div class="float-right">
                            <a href="{{ route('certificaciones.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Crear Nuevo') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Nombre Curso</th>
                                    <th>Slug Curso</th>
                                    <th>Validez</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($certificaciones as $certificacion)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $certificacion->nombre_curso }}</td>
                                    <td>{{ $certificacion->slug_curso }}</td>
                                    <td>{{ $certificacion->validez }}</td>

                                    <td>
                                        <form action="{{ route('certificaciones.destroy',$certificacion->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('certificaciones.show',$certificacion->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('certificaciones.edit',$certificacion->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
            {!! $certificaciones->links() !!}
        </div>
    </div>
</div>
@endsection