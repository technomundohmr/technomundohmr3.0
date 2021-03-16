@extends('layouts.layout')
@section('title')
    Felicidades
@endsection
@section('content')
<header>
    @include('main.logoHeader')
</header>
<section class="sticky-top bg-white">
    @include('main.navbar')
</section>
<hr>
<div class="container my-5">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="text-center">
                <h1 class="display-3">Felicitaciones</h1>
                <p>Hemos recibido tu solicitud con exito. Pronto nos contactaremos contigo para responder tu solicitud.</p>
                <a href="{{url('/')}}" class="btn btn-danger btn-lg">Home</a>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<footer>
    @include('layouts.footer')
    @include('cms.footer')
</footer>
@endsection