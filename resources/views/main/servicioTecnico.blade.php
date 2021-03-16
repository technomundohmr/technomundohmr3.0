@extends('layouts.layout')
@section('title')
    Necesito Servicio Tecnico
@endsection
@section('content')
<header>
    @include('main.logoHeader')
</header>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1 class="m-3 text-center text-primary">Escribenos y pronto nos contactaremos contigo</h1>
            <p class="text-center">En el momento sólo tenemos servicio técnico en Bogotá, contactanos y nos pondremos en
                contacto contigo. Recibirás la cotización lo más pronto posible por whatsapp o por correo electrónico.
            </p>
            <form action="{{ url('/servicioTecnico') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre completo" name="user" id="user" required>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Telefono de contacto" name="telefono" required
                        id="telefono">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Correo Electrónico" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"
                        placeholder="Dirección, si deseas recibir servicio a domicilio" name="direccion" id="direccion" required>
                </div>
                <div class="form-group">
                    <label for="dispositivo">Tipo de dispositivo</label>
                    <select name="dispositivo" class="form-control" id="dispositivo" required>
                        <option value="pc">Computador de torre</option>
                        <option value="laptop">Computador todo en uno o portatil</option>
                        <option value="celular">Celular</option>
                        <option value="tablet">Tablet</option>
                    </select>
                </div>
                <div class="form-group">
                    <p class="peq">Si no lo conoces escribe "0"</p>
                    <input type="text" class="form-control" placeholder="marca" name="marca" id="marca" required>
                </div>
                <div class="form-group">
                    <p class="peq">Si no lo conoces escribe "0"</p>
                    <input type="text" class="form-control" placeholder="modelo" name="modelo" id="modelo" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="problema de tu dispositivo" name="problema" required
                        id="problema">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" required
                        placeholder="Describenos tu problema brevemente..."></textarea>
                </div>
                <input type="text" value="activo" id="estado" name="estado" hidden>
                @php
                    if (isset($_COOKIE['IDafiliado'])) {
                        $afiliado = $_COOKIE['IDafiliado'];
                    } else {
                        $afiliado = 'no';
                    }
                @endphp
                <input type="text" value="{{$afiliado}}" id="afiliado" name="afiliado" hidden>
                <p class="peq">*al hacer click en solicitar servicios aceptas nuestra politica de datos personles.</p>
                <div class="form-group">
                    <button class="btn btn-danger btn-block" data-action='submit'>Solicitar Servicio</button>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<footer>
    @include('cms.footer')
</footer>
@endsection