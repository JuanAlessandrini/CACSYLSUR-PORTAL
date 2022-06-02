@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Alumnos</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Alumnos</h3>
                        <a class="btn btn-warning" href="{{route('alumnos.create')}}">Nuevo</a>
                        <table class="table table-striped mt-2">
                            <thead style="background-color: #00a3e4">
                                <th style="color: #fff;">Nombre</th>
                                <th style="color: #fff;">Apellido</th>
                                <th style="color: #fff;">DNI</th>
                                <th style="color: #fff;">Empresa</th>
                                <th style="color: #fff;">Acciones</th>
                            </thead>

                            <tbody>
                                @foreach($alumnos as $alumno)
                                <tr>
                                    <td style="display: none">{{$alumno->id}}</td>
                                    <td>{{$alumno->nombre}}</td>
                                    <td>{{$alumno->apellido}}</td>
                                    <td>{{$alumno->dni}}</td>
                                    <td>{{$alumno->empresa_id}}</td>
                                    <td>
                                        <form action="{{ route('alumnos.destroy',$alumno->id) }}" method="POST">
                                            @can('editar-alumnos')
                                            <a class="btn btn-info" href="{{ route('alumnos.edit',$alumno->id) }}">Editar</a>
                                            @endcan

                                            @csrf
                                            @method('DELETE')
                                            @can('borrar-alumnos')
                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination justify-content-end">
                            {!!$alumnos->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection