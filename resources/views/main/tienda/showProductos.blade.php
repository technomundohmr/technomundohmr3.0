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
    <div class="container mt-5">
        <div class="row">
            <div class="col text-center text-primary">
                <h2> <strong> Nuestros productos</strong></h2>
                <h2>___________________</h2>
            </div>
        </div>
        <div class="row">
            @include('main.tienda.productos')
        </div>
    </div>
</section>
<hr>
<footer>
    @include('layouts.footer')
    @include('cms.footer')
</footer>