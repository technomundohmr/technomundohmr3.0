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
                <h1 class="text-center">Formulario de cotizacion para web</h1>
                <h5 class="text-center">Al enviar este formulario un asesor se contactara contigo y nos encargaremos de todo</h5>
                <form action="{{ url('/cotizacionWeb') }}" method="post" enctype="multipart/form-data">
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
                        <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono">
                    </div>
                    <div class="form-group">
                        <input type="text" name="negocio" id="negocio" class="form-control" placeholder="Que tipo de negocio tienes">
                    </div>
                    <div class="form-group">
                        <label for="pago">Como te gustaria pagar por tu pagina web</label>
                        <select name="pago" id="pago" class="form-control">
                            <option value="contado">contado</option>
                            <option value="6 meses">6 meses</option>
                            <option value="12 meses">12 meses</option>
                        </select>    
                    </div> 
                    <div class="form-group">
                        <label for="solicitado">Que producto deseas</label>
                        <select name="solicitado" id="solicitado" class="form-control">
                            <option value="cms">Sitio web con gestor de contenido</option>
                            <option value="propio" class="d-none">Sitio web con codigo propio</option>
                            <option value="curso" class="d-none">curso de creacion web SIN PROGRAMAR</option>
                        </select>    
                    </div> 
                    <div class="form-group">
                        <label for="descripcion">Describenos brevemente el producto que deseas conseguir.</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
                    </div>
                    <p class="peq">*Al cotizar aceptas nuestras políticas de tratamiento de datos personales*</p>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-lg btn-block">Suscribirme</button>
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