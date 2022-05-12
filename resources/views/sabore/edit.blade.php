@extends('layouts.app')

@section('template_title')
    Update Sabore
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Sabore</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('sabores.update', $sabore->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('sabore.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
