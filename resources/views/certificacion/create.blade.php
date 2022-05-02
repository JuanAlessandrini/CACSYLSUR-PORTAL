@extends('layouts.app')

@section('template_title')
Create Certificacion
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Crear Curso</h3>
    </div>
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Crear Curso</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('certificaciones.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('certificacion.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection