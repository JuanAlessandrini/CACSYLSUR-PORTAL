@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Usuarios</h3>
    </div>
    <div class="">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">


                            <div class="float-right">
                                <a href="{{ route('usuarios.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                    {{ __('Crea Nuevo') }}
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
                                        <th>Nombre</th>
                                        <th>E-mail</th>
                                        <th>Rol</th>
                                        <th>Acciones</th>
                                    </tr>

                                </thead>

                                <tbody>
                                    @foreach($usuarios as $usuario)
                                    <tr>
                                        <td style="display: none">{{$usuario->id}}</td>
                                        <td>{{$usuario->name}}</td>
                                        <td>{{$usuario->email}}</td>
                                        <td>
                                            @if(!empty($usuario->getRoleNames()))
                                            @foreach($usuario->getRoleNames() as $rolName)
                                            <h5><span class="badge badge-dark"> {{$rolName}}</span></h5>
                                            @endforeach

                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{route('usuarios.destroy',$usuario->id)}}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('usuarios.show',$usuario->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('usuarios.edit',$usuario->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Borrar</button>
                                            </form>
                                        </td>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="pagination justify-content-end">
                        {!!$usuarios->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection