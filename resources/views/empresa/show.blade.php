@extends('layouts.app')

@section('template_title')
    {{ $empresa->name ?? 'Show Empresa' }}
@endsection

@section('content')
    <section class="section">
        
        <div class="section-header">
            <h3 class="page__heading">Empresa</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <div class="float-left">
                            <span class="card-title">Show Empresa</span>
                        </div> --}}
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empresas.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Empresa:</strong>
                            {{ $empresa->nombre_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Cuit:</strong>
                            {{ $empresa->cuit }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
