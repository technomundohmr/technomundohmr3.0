@extends('layouts.layout')
@section('title')
    Tienda Technomundo
@endsection
@section('content')
<header>
    @include('main.logoHeader')
</header>
<section class="sticky-top">
    @include('main.tienda.navbar')
</section>
<section>
    @include('main.tienda.slider')
</section>
<section>
    @include('main.tienda.info2')
</section>
<section>
    @include('main.tienda.categorias')
</section>
<section>
    @include('main.tienda.info1')
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col text-center text-primary"><h2><strong>Novedades</strong></h2><h2>____________________</h2></div>
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