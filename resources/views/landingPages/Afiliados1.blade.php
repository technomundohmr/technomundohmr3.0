@extends('layouts.layout')
@section('title')
    Technomundo HMR
@endsection
@section($destino='afiliadoRegistro')
@section('content')

    <h2 class="text-center text-primary mt-3">
        <img src="img/logo.png" alt="" width="120px" loading="lazy">
      | la forma mas facil de ganar dinero por INTERNET!
    </h2>
    <div class="header1 py-3">
        <div class="container">
            <div class="row py-3 mt-5">
                <div class="col-md-6 ">
                    <div class="p-3 my-5 ">
                        <h2 class="text-center text-white p-2">
                            <i>
                                <strong>
                                    "GRATIS: puedes inscribirte gratis y sin inversion y todo por INTERNET!"
                                </strong>
                            </i>
                        </h2>
                        <h4 class="text-center text-white">
                            Solo debes registrarte y copiar tu enlace de afiliado con potenciales clientes y recibiras automaticamente tu comision!
                        </h4>
                        @include('landingPages/formularioLanding')
                    </div>

                </div>
                <div class="col-md-6">
                    <img src="img/dinero por internet.jpg" alt="" width="100%" loading="lazy">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row py-3">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2 class="text-center text-primary p-4">Esta es la forma más fácil de ganar dinero por internet</h2>
                <h3 class="py-2"><strong class="text-primary">&#10004</strong> <i>Gana dinero por vender páginas web desde $60.000 por venta.</i></h3>
                <h3 class="py-2"><strong class="text-primary">&#10004</strong> <i>Retiros directos a daviplata, nequi, efecty, entre otros.</i></h3>
                <h3 class="py-2"><strong class="text-primary">&#10004</strong> <i>Dinero Fácil y rápido 100% automático, solo comparte el enlace de afiliado.</i></h3>
                @include('landingPages/formularioLanding')
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
                            <p class="card-text text-justify">Registra tu correo para ver paletas de publicidad 100% gratis, creados para que obtengas los mejores resultados</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 2</h5>
                            <p class="card-text text-justify">Una recomendación buena puede darte ingresos pasivos por mucho timepo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 3</h5>
                            <p class="card-text text-justify">Vamos a lograr una revolucion en la economía colaborativa juntos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 4</h5>
                            <p class="card-text text-justify">Puedes compartir tu enlace de forma ilimitaday ganar tanto dinero como desees..</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 5</h5>
                            <p class="card-text text-justify">Nuestro newsletter te recomendxará los mejores productos y estrategias para que saques el mayor provecho a tu negocio por internet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 6</h5>
                            <p class="card-text text-justify">La forma más facil para emprender por internet, tan solo te tomará unos minutos.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    @include('landingPages/formularioLanding')
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    </div>
@endsection
