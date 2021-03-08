@extends('layouts.layout')
@section('title')
    Technomundo HMR
@endsection
@section('content')
<header>
    @include('main.logoHeader')
</header>
<section class="sticky-top bg-white">
    @include('main.navbar')
</section>
<header>
    @include('main.slider')
</header>
<section>
    @include('main.servicios', $servicios)
</section>
<section>
    @include('main.seccionWebPage')
    @include('main.seccionWebPage2')
</section>
<section>
    @include('main.seccionSoftware')
    @include('main.seccionSoftware2')
</section>
<section>
    @include('main.seccionServicioTecnico')
    @include('main.seccionServicioTecnico2')
</section>
<footer>
    @include('layouts.footer')
    @include('cms.footer')
</footer>
@endsection