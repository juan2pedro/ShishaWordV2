@extends('layouts.app')

@section('template_title')
    {{ $disponible->name ?? 'Show Disponible' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Disponible</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('disponibles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Materiale Id:</strong>
                            {{ $disponible->materiale_id }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo Id:</strong>
                            {{ $disponible->modelo_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
