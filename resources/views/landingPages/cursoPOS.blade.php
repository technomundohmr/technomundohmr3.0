@extends('layouts.layout')
@section('title')
    Technomundo HMR
@endsection
@section($destino='afiliadoRegistro')
@section('content')

    <h2 class="text-center text-primary mt-3">
        <img src="img/logo.png" alt="" width="120px" loading="lazy">
      | SISTEMATICE SU EMPRESA HOY!
    </h2>
    <div class="header1 py-3">
        <div class="container">
            <div class="row py-3 mt-5">
                <div class="col-md-6 ">
                    <div class="p-3 my-5 ">
                        <h2 class="text-center text-white p-2">
                            <i>
                                <strong>
                                    "GRATIS: Aprende a sistematizar tu negocio con software POS"
                                </strong>
                            </i>
                        </h2>
                        <h4 class="text-center text-white">
                            Solo debes esperar a recibir en tu correo electronico o whatsapp nuestro curso! descarga automatica
                        </h4>
                        @include('landingPages/formularioLanding2')
                    </div>

                </div>
                <div class="col-md-6">
                    <img src="img/cursoPOS.jpg" alt="" width="100%" loading="lazy">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row py-3">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2 class="text-center text-primary p-4">La forma más fácil y economica de llevar ventas, inventario, cartera, etc. DE FORMA AUTOMÁTICA </h2>
                <h2 class="text-center text-primary p-4">El software más facil de usar.</h2>
                <h3 class="py-2"><strong class="text-primary">&#10004</strong> <i>Lleva ventas, compras y ganancias de forma sencilla y automática.</i></h3>
                <h3 class="py-2"><strong class="text-primary">&#10004</strong> <i>Maneja tus inventarios de la forma más sencilla.</i></h3>
                <h3 class="py-2"><strong class="text-primary">&#10004</strong> <i>LLeva registro de cartera de clientes, cobros y abonos</i></h3>
                @include('landingPages/formularioLanding2')
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    </div>
    <hr>
    <div class="header1 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 1</h5>
                            <p class="card-text text-justify">LLeva control de ventas con un solo click</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 2</h5>
                            <p class="card-text text-justify">Cartera organizada y con control de abonos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 3</h5>
                            <p class="card-text text-justify">La forma de crear productos es muy facil.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 4</h5>
                            <p class="card-text text-justify">Soporte gratuito despues de activar el software.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 5</h5>
                            <p class="card-text text-justify">Automatiza tu negocio de la forma mas economica y sencilla.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 6</h5>
                            <p class="card-text text-justify">El curso es GRATIS!!!.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    @include('landingPages/formularioLanding2')
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    </div>
@endsection
