@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Empresas</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Empresas</h3>
                        <a class="btn btn-warning" href="{{route('usuarios.create')}}">Nuevo</a>
                        <table class="table table-striped mt-2">
                            <thead style="background-color: #00a3e4">
                                <th style="color: #fff;">Nombre Empresa</th>
                                <th style="color: #fff;">Cuit</th>
                                <th style="color: #fff;">Acciones</th>
                            </thead>

                            <tbody>
                                @foreach($empresas as $empresa)
                                <tr>
                                    <td style="display: none">{{$empresa->id}}</td>
                                    <td>{{$empresa->nombre_empresa}}</td>
                                    <td>{{$emprresa->cuit}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination justify-content-end">
                            {!!$empresa->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection