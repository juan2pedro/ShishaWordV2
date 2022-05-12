@extends('layouts.app')

@section('template_title')
    {{ $modelo->name ?? 'Show Modelo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Modelo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('modelos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Marca Id:</strong>
                            {{ $modelo->marca_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $modelo->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $modelo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $modelo->color }}
                        </div>
                        <div class="form-group">
                            <strong>Detalles:</strong>
                            {{ $modelo->detalles }}
                        </div>
                        <div class="form-group">
                            <strong>Base:</strong>
                            {{ $modelo->base }}
                        </div>
                        <div class="form-group">
                            <strong>Imagenes:</strong>
                            {{ $modelo->imagenes }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $modelo->precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
