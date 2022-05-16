@extends('layouts.app')

@section('template_title')
Create Inscripcione
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Inscripciones</h3>
    </div>
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('cursos.index') }}"> Atras</a>
                    </div>
                </div> 
                
                <div class="card-body">
                    <form method="POST" action="{{ route('inscripciones.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('inscripcione.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

