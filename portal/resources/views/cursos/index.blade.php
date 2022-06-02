@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Grupos</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Grupos</h3>
                        <a class="btn btn-warning" href="{{route('cursos.create')}}">Nuevo</a>
                        <table class="table table-striped mt-2">
                            <thead style="background-color: #00a3e4">
                                <th style="color: #fff;">nombre</th>
                                <th style="color: #fff;">mes dictado</th>
                                <th style="color: #fff;">año</th>
                                <th style="color: #fff;">Acciones</th>

                            </thead>

                            <tbody>
                                @foreach($cursos as $curso)
                                <tr>
                                    <td style="display: none">{{$curso->id}}</td>
                                    <td>{{$curso->nombre_grupo}}</td>
                                    <td>{{$curso->mes_dictado}}</td>
                                    <td>{{$curso->anio_dictado}}</td>

                                    <td>
                                        <form action="{{ route('cursos.destroy',$curso->id) }}" method="POST">
                                            @can('editar-curso')
                                            <a class="btn btn-info" href="{{ route('cursos.edit',$curso->id) }}">Editar</a>
                                            @endcan
                                            <a class="btn btn-success" href="{{ route('cursos.edit',$curso->id) }}">Ver Grupo</a>
                                            @csrf
                                            @method('DELETE')
                                            @can('borrar-curso')
                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination justify-content-end">
                            {!!$cursos->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection