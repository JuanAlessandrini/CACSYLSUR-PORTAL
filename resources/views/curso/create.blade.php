@extends('layouts.app')

@section('template_title')
Create Curso
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Grupos</h3>
    </div>
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('cursos.index') }}">Atras</a>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('cursos.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('curso.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection