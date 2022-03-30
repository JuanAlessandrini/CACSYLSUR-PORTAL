@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Certificaciones</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">


                        @can('crear-certificado')
                        <a class="btn btn-warning" href="{{ route('certificaciones.create') }}">Nuevo</a>
                        @endcan

                        <table class="table table-striped mt-2">
                            <thead style="background-color:#00a3e4">
                                <th style="display: none;">ID</th>
                                <th style="color:#fff;">Nombre Certifiacion</th>
                                <th style="color:#fff;">Validez</th>
                                <th style="color:#fff;">Acciones</th>
                            </thead>
                            <tbody>
                                @foreach ($certificaciones as $certificacion)
                                <tr>
                                    <td style="display: none;">{{ $certificacion->id }}</td>
                                    <td>{{ $certificacion->nombre_curso }}</td>
                                    <td>{{ $certificacion->validez }} anio</td>
                                    <td>
                                        <form action="{{ route('certificaciones.destroy',$certificacion->id) }}" method="POST">
                                            @can('editar-certificacion')
                                            <a class="btn btn-info" href="{{ route('certificaciones.edit',$certificacion->id) }}">Editar</a>
                                            @endcan

                                            @csrf
                                            @method('DELETE')
                                            @can('borrar-certificacion')
                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $certificaciones->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection