@extends('layouts.layout')
@section('title')
    Tienda Technomundo
@endsection
@section('content')
    <header>
        @include('main.logoHeader')
    </header>
    <section class="sticky-top bg-white">
        @include('main.tienda.navbar')
    </section>
    <div class="container">
        <div class="row">
            <div class="col">
                @foreach ($categorias as $categoria)
                    <h1 class="text-center text-primary display-3">{{ $categoria->categoria }}</h1>
                @endforeach

                <h1 class="text-center text-primary">________________</h1>
            </div>
        </div>
        <div class="row">
            @include('main.tienda.productos')
        </div>
    </div>
    <hr>
    <footer>
        @include('layouts.footer')
        @include('cms.footer')
    </footer>
