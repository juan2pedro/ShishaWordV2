@extends('layouts.app')

@section('template_title')
    Create Crea
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Crea</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('creas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('crea.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
