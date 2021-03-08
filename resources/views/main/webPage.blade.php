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
<footer>
    @include('layouts.footer')
    @include('cms.footer')
</footer>
@endsection