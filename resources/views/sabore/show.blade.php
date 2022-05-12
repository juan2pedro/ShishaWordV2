@extends('layouts.app')

@section('template_title')
    {{ $sabore->name ?? 'Show Sabore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Sabore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sabores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Marca Id:</strong>
                            {{ $sabore->marca_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $sabore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Detalles:</strong>
                            {{ $sabore->detalles }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
