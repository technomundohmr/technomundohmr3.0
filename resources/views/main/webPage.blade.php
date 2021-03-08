@extends('layouts.layout')
@section('title')
    Crear mi WEB || Technomundo HMR
@endsection
@section('content')
<header>
    @include('main.logoHeader')
</header>
<section class="sticky-top bg-white">
    @include('main.navbar')
</section>
<header>
    @include('main.planPagos')
</header>
<section>
    @include('main.web1')
</section>
<section class="d-none">
    @include('main.web2')
</section>
<section class="d-none">
    @include('main.web3')
</section>
<footer>
    @include('layouts.footer')
    @include('cms.footer')
</footer>
@endsection