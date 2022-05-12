@extends('layouts.app')

@section('template_title')
    {{ $mezcla->name ?? 'Show Mezcla' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Mezcla</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mezclas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Detalles:</strong>
                            {{ $mezcla->detalles }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
