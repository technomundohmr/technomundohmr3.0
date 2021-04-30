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
    <section>
        <div class="container mt-5 p-5">
            <div class="row">
                <div class="col text-center">
                    <h4 class="text-primary">Lo sentimos mucho aún no está listo este medio de pago</h4>
                    <h1 class="text'primary"><i class="fas fa-sad-tear"></i></h1>
                    <h4>Estamos trabajando en la implementacion de Pay U por ahora prueba una de estas dos opciones:</h4>
                </div>
            </div>
        </div>
    </section>
    <section>
        @include('main.tienda.checkoutNequi-Daviplata')
    </section>
    <hr>
    <footer>
        @include('layouts.footer')
        @include('cms.footer')
    </footer>
