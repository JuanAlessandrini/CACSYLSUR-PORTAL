@extends('layouts.app')

@section('template_title')
Create Alumno
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Alta de Alumnos</h3>

    </div>
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')
            @if ($message = Session::get('error'))
            <div class="alert alert alert-warning">
                <p>{{ $message }}</p>
            </div>
            @endif

            <div class="card card-default">

                <div class="card-body">
                    <form method="POST" action="{{ route('alumnos.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('alumno.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection