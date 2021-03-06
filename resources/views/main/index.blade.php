@extends('layouts.layout')
@section('title')
    Technomundo HMR
@endsection
@section('content')
<header>
    @include('main.logoHeader')
</header>
<section>
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
@endsection