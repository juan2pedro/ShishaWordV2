@extends('layouts.app')

@section('template_title')
Modelo
@endsection

@section('content')
@csrf
<section class="content container-fluid">
    <div class="row">
        @foreach ($modelos as $modelo)

        <article class="card card-style2 ">
            <div class="card-img">
                <img class="rounded-top" src="public\media\{{ $modelo->imagenes }}" />
             </div>
            <div class="date">
                <span> {{ $modelo->fecha }}</span>
            </div>

            <div class="card-body">
            @if (Session::get('isAdmin') ==0)
                <h3 class="h5"><a href="{{ route('modelos.edit',$modelo->id) }}">{{ $modelo->nombre }}</a>
                </h3>
                @else 
                    <h3 class="h5"><a href="{{ route('modelos.show',$modelo->id) }}">{{ $modelo->nombre }}</a>
                </h3>
                
            @endif
                <p class="display-30">
                    {{ $modelo->detalles }}
                </p>
            </div>
            <div class="card-footer">
                <ul>
                    <li><i class="fas fa-user"></i>{{ $modelo->marca->nombre }}</li>
                    <li><i class="far fa-comment-dots"></i>{{ $modelo->precio }} €</span></li>
                </ul>
            </div>
        </article>

        @endforeach
        </div>
       </section>
        {!! $modelos->links() !!}

        @endsection
