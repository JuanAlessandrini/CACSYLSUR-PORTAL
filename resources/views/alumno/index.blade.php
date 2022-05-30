@extends('layouts.app')

@section('template_title')
Alumno
@endsection

@section('content')
<div class="section">
    <div class="section-header">
        <h3 class="page__heading">Alumnos</h3>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <!-- <span id="card_title">
                            {{ __('Alumno') }}
                        </span> -->
                        @can('crear-alumno')
                        <div class="float-right">
                            <a href="{{ route('alumnos.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Crear Nuevo') }}
                            </a>

                        </div>
                        @endcan
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
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Dni</th>
                                    <th>Ultimo Curso</th>
                                    <th>Realizado</th>
                                    @if (\Illuminate\Support\Facades\Auth::user()->name==='superadmin')
                                    <th>Empresa</th>
                                    @endif
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alumnos as $alumno)
                                <tr>
                                    <td>{{ $alumno->nombre }}</td>
                                    <td>{{ $alumno->apellido }}</td>
                                    <td>{{ $alumno->dni }}</td>
                                    <td></td>
                                    <td></td>

                                    @isset($alumno->empresa->nombre_empresa)
                                    @if(\Illuminate\Support\Facades\Auth::user()->name !== $alumno->empresa->nombre_empresa)
                                    <td>{{ $alumno->empresa->nombre_empresa }} </td>
                                    @endif
                                    @else
                                    <td>Sin empresa</td>
                                    @endisset

                                    <td>
                                        <form action="{{ route('alumnos.destroy',$alumno->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('alumnos.show',$alumno->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                            @can('editar-alumno')
                                            <a class="btn btn-sm btn-success" href="{{ route('alumnos.edit',$alumno->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                            @endcan
                                            @csrf
                                            @method('DELETE')
                                            @can('borrar-alumno')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $alumnos->links() !!}
        </div>
    </div>
</div>
@endsection