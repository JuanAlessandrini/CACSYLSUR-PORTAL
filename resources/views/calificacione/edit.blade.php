@extends('layouts.app')

@section('template_title')
Update Calificacione
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Editar calificacion</h3>
    </div>
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <!-- <div class="card-header">
                    <span class="card-title">Update Calificacione</span>
                </div> -->
                <div class="card-body">
                    <form method="POST" action="{{ route('calificaciones.update', $calificacione->id) }}" role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('calificacione.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection