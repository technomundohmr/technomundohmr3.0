
@extends('layouts.layout')
@section('title')
    Login Afiliado || Technomundo HMR
@endsection
@section('content')
<header>
    @include('main.logoHeader')
</header>
<section class="sticky-top bg-white">
    @include('main.navbar')
    <hr>
</section>
<div class="container p-5">
    <div class="row">
        <div class="col">
            {!! $errors->first('errores','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Cuidado!</strong> :message
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>')
                
            !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 px-5">
            
            <h1 class="text-center">Hola amigo nuestro</h1>
            <form action="{{url('/afiliadoLogin')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="email" class="form-control" name="correo" id="correo" placeholder="Usuario">
                </div>
                <div class="form-group"><input type="password" class="form-control" name="password" id="password" placeholder="contraseña"></div>
                <button type="submit" class="btn btn-primary btn-block btn-lg">Ingresar</button>
            </form>
            <a href="{{url('/afiliadoRegistro')}}" class="my-2 btn btn-danger btn-block btn-lg">Registrarme</a>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<footer my-5>
    @include('cms.footer')
</footer>
@endsection