@extends('layouts.app')

@section('template_title')
    {{ $contiene->name ?? 'Show Contiene' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Contiene</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contienes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Mezcla Id:</strong>
                            {{ $contiene->mezcla_id }}
                        </div>
                        <div class="form-group">
                            <strong>Sabore Id:</strong>
                            {{ $contiene->sabore_id }}
                        </div>
                        <div class="form-group">
                            <strong>Porcentaje:</strong>
                            {{ $contiene->porcentaje }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
