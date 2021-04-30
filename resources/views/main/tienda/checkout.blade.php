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
        @include('main.tienda.checkoutNequi-daviplata')
    </section>
    <hr>
    <footer>
        @include('layouts.footer')
        @include('cms.footer')
    </footer>
