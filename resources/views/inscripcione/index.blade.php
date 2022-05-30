@extends('layouts.app')

@section('template_title')
Inscripcione
@endsection

@section('content')
<div class="section">
    <div class="section-header">
        <h3 class="page__heading">Inscribir alumnos</h3>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <!-- <span id="card_title">
                            {{ __('Inscripcione') }}
                        </span> -->

                        <div class="float-right">
                            <a href="{{ route('inscripciones.create') }}" class="btn btn-success btn-sm float-right" data-placement="left">
                                {{ __('Crear nuevo') }}
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

                                    <th>Alumno </th>
                                    <th>Dni </th>
                                    <th>Empresa</th>
                                    <th>Curso </th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inscripciones as $inscripcione)
                                @isset($inscripcione->certificado->nombre_curso)
                                <tr>
                                    <td>{{ $inscripcione->alumno->nombre }} {{$inscripcione->alumno->apellido}}</td>
                                    <td>{{$inscripcione->alumno->dni}}</td>
                                    <td></td>
                                    <td>{{$inscripcione->certificado->nombre_curso }}</td>

                                    <td>
                                        <form action="{{ route('inscripciones.destroy',$inscripcione->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('alumnos.show',$inscripcione->alumno_id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                            <a class="btn btn-sm btn-success" href="{{ route('inscripciones.edit',$inscripcione->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endisset
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
            {!! $inscripciones->links() !!}
        </div>
    </div>
</div>
@endsection