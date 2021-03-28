@extends('layouts.layout')
@section('title')
    Contacto || technomundo HMR
@endsection
@section('content')
<header>
    @include('main.logoHeader')
</header>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 class="text-center">Formulario de Contacto</h1>
                <h5 class="text-center">Escribenos y nos contactaremos contigo.</h5>
                <form action="{{ url('/contacto') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <hr>
                    <div class="form-group">
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="correo" id="correo" class="form-control" placeholder="correo" required>
                    </div>
                    <div class="form-group">
                        <label class="peq" for="telefono">Telefono preferiblemente con Whatsapp</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" required >
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Solicitud</label>
                        <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <p class="peq">*Al cotizar aceptas nuestras políticas de tratamiento de datos personales*</p>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-lg btn-block">Enviar</button>
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