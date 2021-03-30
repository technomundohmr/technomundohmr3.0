@extends('layouts.layout')
@section('title')
    Technomundo HMR
@endsection
@section($destino='webPage')
@section('content')

    <h2 class="text-center text-primary mt-3">
        <img src="img/logo.png" alt="" width="120px" loading="lazy">
      | Aprende cómo optener resultados en tu Negocio por INTERNET!
    </h2>
    <div class="header1 py-3">
        <div class="container">
            <div class="row py-3 mt-5">
                <div class="col-md-6 ">
                    <div class="p-3 my-5 ">
                        <h2 class="text-center text-white p-2">
                            <i>
                                <strong>
                                    "GRATIS: curso para aprender a virtualizar tu negocio por INTERNET!"
                                </strong>
                            </i>
                        </h2>
                        <h4 class="text-center text-white">
                            Te entregamos una pagina WEB con todo lo que necesites!
                        </h4>
                        @include('landingPages/formularioLanding')
                    </div>

                </div>
                <div class="col-md-6">
                    <img src="img/onlineShop.jpg" alt="" width="100%" loading="lazy">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row py-3">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2 class="text-center text-primary p-4">8 de cada 10 negocios quebrarán por no tener presencia en internet</h2>
                <h3 class="py-2"><strong class="text-primary">&#10004</strong> <i>Puedes editar tu sitio weba conveniencia.</i></h3>
                <h3 class="py-2"><strong class="text-primary">&#10004</strong> <i>Te brindaremos asesoría gratis para que puedas manejar tu negocio virtual de forma sencilla y rapida.</i></h3>
                <h3 class="py-2"><strong class="text-primary">&#10004</strong> <i>Una vez que pagas tu sitio web será 100% de tu propiedad.</i></h3>
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
                <div class="col-md-3">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 1</h5>
                            <p class="card-text text-justify">Los negocios que venden por internet multiplicarán sus ventas exponencialmente.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 2</h5>
                            <p class="card-text text-justify">Los sitios web creados por technomundo pueden ser manejados por sus clientes con total libertad y facilidad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 3</h5>
                            <p class="card-text text-justify">El 80% de las ventas por internet se caen por no tener una pasarela de pagos directa dentro de la misma página.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 4</h5>
                            <p class="card-text text-justify">En technomundo te ayudaremos a programar tu pasarela de pagos, promociones, y cataslogo de productos. Productos que recibes listos para ser manejados por ti.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 5</h5>
                            <p class="card-text text-justify">Las ventas por redes sociales pueden ser 3 veces más efectivas con ayuda de un buen sitio web.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 6</h5>
                            <p class="card-text text-justify">Una landing page aumenta enormemente tus posibilidades de vender por internet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 7</h5>
                            <p class="card-text text-justify">Cuando adquieres un sitio web con technomundo recibirás tu landing page</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 8</h5>Cada sitio web es diferente, por ello pregunta por nuestras apps personalizadas.</p>
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
