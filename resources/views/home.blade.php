@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Dashboard</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @can('ver-usuarios')
                            <div class="col-md-4 col-xl-4">

                                <div class="card bg-c-blue order-card">
                                    <div class="card-block">
                                        <h5>Usuarios</h5>
                                        @inject('cant_usuarios', 'App\Http\Controllers\UserController')
                                        <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_usuarios->contador()}}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/usuarios" class="text-white">Ver más</a></p>
                                    </div>
                                </div>

                            </div>
                            @endcan



                            @can('ver-certificacion')
                            <div class="col-md-4 col-xl-4">
                                <div class="card bg-c-pink order-card">
                                    <div class="card-block">
                                        <h5>Cursos</h5>
                                        @inject('cant_usuarios', 'App\Http\Controllers\CertificacionController')
                                        <h2 class="text-right"><i class="fa fa-certificate f-left"></i><span>{{$cant_usuarios->contador()}}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/certificaciones" class="text-white">Ver más</a></p>
                                    </div>
                                </div>
                            </div>
                            @endcan
                            @can('ver-curso')
                            <div class="col-md-4 col-xl-4">
                                <div class="card bg-c-pink order-card">
                                    <div class="card-block">
                                        <h5>Grupos</h5>
                                        @inject('cant_usuarios','App\Http\Controllers\CursoController')
                                        <h2 class="text-right"><i class="fa fa-chalkboard f-left"></i><span>{{$cant_usuarios->contador()}}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/cursos" class="text-white">Ver más</a></p>
                                    </div>
                                </div>
                            </div>
                            @endcan

                            @can('ver-empresas')
                            <div class="col-md-4 col-xl-4">
                                <div class="card bg-c-pink order-card">
                                    <div class="card-block">
                                        <h5>Empresas</h5>
                                        @inject('cant_usuarios','App\Http\Controllers\EmpresaController')
                                        <h2 class="text-right"><i class="fa fa-building f-left"></i><span>{{$cant_usuarios->contador()}}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/empresas" class="text-white">Ver más</a></p>
                                    </div>
                                </div>
                            </div>
                            @endcan
                            @can('ver-alumno')
                            <div class="col-md-4 col-xl-4">
                                <div class="card bg-c-orange order-card">
                                    <div class="card-block">
                                        <h5>Alumnos</h5>
                                        @inject('cant_usuarios','App\Http\Controllers\AlumnoController')
                                        <h2 class="text-right"><i class="fa fa-user-graduate f-left"></i><span>{{$cant_usuarios->contador()}}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/alumnos" class="text-white">Ver más</a></p>
                                    </div>
                                </div>
                            </div>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection