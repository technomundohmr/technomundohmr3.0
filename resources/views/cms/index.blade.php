@extends('cms.layout')
@section('content')
@include('cms.navbar')
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <h3 class="text-center">Main</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="botonCms bg-primary px-3 py-5 text-center m-2">
                    <a href="{{url('/servicios/create')}}">
                        <h3><span><i class="fas fa-hand-holding-medical display-3"></i></span> crear servicio</h3>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="botonCms bg-danger
                 px-3 py-5 text-center m-2">
                    <a href="{{url('/cotizacionWeb')}}">
                        <h3><span><i class="fas fa-network-wired display-3"></i></span> Cotizacion Web</h3>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="botonCms bg-info
                 px-3 py-5 text-center m-2">
                    <a href="{{url('/pruebaSoftware')}}">
                        <h3><span><i class="fas fa-laptop-code display-3"></i></span> Cotizacion Software</h3>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="botonCms bg-warning
                 px-3 py-5 text-center m-2">
                    <a href="{{url('/contacto')}}">
                        <h3><span><i class="fas fa-envelope-open-text display-3"></i></span> Contactos</h3>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="botonCms bg-success
                 px-3 py-5 text-center m-2">
                    <a href="{{url('/listaAfiliados')}}">
                        <h3><span><i class="fas fa-user-friends display-3"></i></span> Afiliados</h3>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <h3 class="text-center">Marketing</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="botonCms bg-success px-3 py-5 text-center m-2">
                    <a href="{{url('/counter/create')}}">
                        <h3><span><i class="fas fa-chart-line display-3"></i></span> visitas</h3>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="botonCms bg-info px-3 py-5 text-center m-2">
                    <a href="{{url('/correo')}}">
                        <h3><span><i class="fas fa-mail-bulk display-3"></i></span> Correos</h3>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="botonCms bg-warning px-3 py-5 text-center m-2">
                    <a href="{{url('/suscripcion')}}">
                        <h3><span><i class="fas fa-users display-3"></i></span> Suscripciones</h3>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <h3 class="text-center">Tienda</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="botonCms bg-danger px-3 py-5 text-center m-2">
                    <a href="{{url("/cms/tienda/productos/create")}}">
                        <h3><span><i class="fas fa-pallet display-3"></i></span> Productos</h3>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="botonCms bg-success px-3 py-5 text-center m-2">
                    <a href="{{url('/cms/tienda/categorias/create')}}">
                        <h3><span><i class="fas fa-boxes display-3"></i></span> Categorias</h3>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="botonCms bg-primary px-3 py-5 text-center m-2">
                    <a href="">
                        <h3><span><i class="fas fa-truck-moving display-3"></i></span> Pedidos</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
@include('cms.footer')
@endsection