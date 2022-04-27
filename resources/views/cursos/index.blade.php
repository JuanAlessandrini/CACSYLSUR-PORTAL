@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Cursos</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Cursos</h3>
                        <a class="btn btn-warning" href="{{route('empresas.create')}}">Nuevo</a>
                        <table class="table table-striped mt-2">
                            <thead style="background-color: #00a3e4">
                                <th style="color: #fff;">Certificacion</th>
                                <th style="color: #fff;">Alumno</th>
                                <th style="color: #fff;">calificacion</th>
                                <th style="color: #fff;">fecha</th>
                                <th style="color: #fff;">Acciones</th>

                            </thead>

                            <tbody>
                                @foreach($cursos as $curso)
                                <tr>
                                    <td style="display: none">{{$curso->id}}</td>
                                    <td>{{$curso->id_certificacion}}</td>
                                    <td>{{$curso->id_alumno}}</td>
                                    <td>{{$curso->id_calificacion}}</td>
                                    <td>{{$curso->fecha_realizacion}}</td>

                                    <td>
                                        <form action="{{ route('cursos.destroy',$curso->id) }}" method="POST">
                                            @can('editar-curso')
                                            <a class="btn btn-info" href="{{ route('empresas.edit',$empresa->id) }}">Editar</a>
                                            @endcan

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