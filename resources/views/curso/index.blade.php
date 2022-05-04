@extends('layouts.app')

@section('template_title')
Curso
@endsection

@section('content')
<div class="section">
    <div class="section-header">
        <h3 class="page__heading">Grupos</h3>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                @can('crear-curso')
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <!-- <span id="card_title">
                            {{ __('Curso') }}
                        </span> -->

                        <div class="float-right">
                            <a href="{{ route('cursos.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Crear Nuevo') }}
                            </a>

                        </div>

                    </div>

                </div>
                @endcan
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

                                    <th>Nombre Grupo</th>
                                    <th>Mes Dictado</th>
                                    <th>Año Dictado</th>
                                    <th>Curso</th>
                                    <th>Estado</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cursos as $curso)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $curso->nombre_grupo }}</td>
                                    <td>{{ $curso->mes_dictado }}</td>
                                    <td>{{ $curso->anio_dictado }}</td>
                                    <td>{{ $curso->certificado->nombre_curso }}</td>
                                    <td>{{ $curso->estado }}</td>

                                    <td>
                                        <form action="{{ route('cursos.destroy',$curso->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('cursos.show',$curso->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('cursos.edit',$curso->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
            {!! $cursos->links() !!}
        </div>
    </div>
</div>
@endsection