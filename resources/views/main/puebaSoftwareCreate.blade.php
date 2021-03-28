@extends('layouts.layout')
@section('title')
    Quiero mi web YA!!!
@endsection
@section('content')
<header>
    @include('main.logoHeader')
</header>
<section>
    @php
        if(isset($_COOKIE['IDafiliado'])){
            $afiliado = $_COOKIE['IDafiliado'];
        }else{
            $afiliado = "no";
        }
    @endphp
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 class="text-center">Al llenar este formulario descargarás un curso gratis para prender a usar el software de POS</h1>
                <h5 class="text-center">Al enviar este formulario un asesor se contactara contigo, por ahora recibirás a tu correo electronico el software y el curso.</h5>
                <form action="{{ url('/pruebaSoftware') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="afiliado" id="afiliado" class="form-control" value="{{$afiliado}}" hidden>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control" placeholder="correo" required>
                    </div>
                    <div class="form-group">
                        <label class="peq" for="telefono">Telefono preferiblemente con Whatsapp</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="negocio" id="negocio" class="form-control" placeholder="Que tipo de negocio tienes">
                    </div>
                    <div class="form-group">
                    <input type="text" value="POS" name="solicitado" id="solicitado" hidden>
                    <p class="peq">*Al descargar aceptas nuestras políticas de tratamiento de datos personales*</p>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-lg btn-block">Descargar curso y prueba gratis!!!</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
<footer>
    @include('cms.footer')
</footer>
@endsection