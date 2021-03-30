@extends('layouts.layout')
@section('title')
    Technomundo HMR
@endsection
@section($destino='servicioTecnico')
@section('content')

    <h2 class="text-center text-primary mt-3">
        <img src="img/logo.png" alt="" width="120px" loading="lazy">
        Agenda tu servicio técnico y recibe un obsequio en tu EMAIL.
    </h2>
    <div class="header1 py-3">
        <div class="container">
            <div class="row py-3 mt-5">
                <div class="col-md-6 ">
                    <div class="p-3 my-5 ">
                        <h2 class="text-center text-white p-2">
                            <i>
                                <strong>
                                    "GRATIS: curso para aprender a cuidar tu computador y hacerlo más rápido"
                                </strong>
                            </i>
                        </h2>
                        <h4 class="text-center text-white">
                            Un servicio técnico confiable y seguro, sin tener que esperar mucho tiempo
                        </h4>
                        @include('landingPages/formularioLanding')
                    </div>

                </div>
                <div class="col-md-6">
                    <img src="img/landingST1.jpg" alt="" width="100%" loading="lazy">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row py-3">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2 class="text-center text-primary p-4">8 de cada 10 computadores se dañan por no hacerle mantenimiento a
                    tiempo</h2>
                <h3 class="py-2"><strong class="text-primary">&#10004</strong> <i>Agendas tu servicio a domicilio si lo
                        deseas.</i></h3>
                <h3 class="py-2"><strong class="text-primary">&#10004</strong> <i>No tienes que esperar semanas para poder
                        recibir tu máquina.</i></h3>
                <h3 class="py-2"><strong class="text-primary">&#10004</strong> <i>Te aconsejaremos de manera honesta para
                        que puedas recibir tu equipo lo mejor posible.</i></h3>
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
                            <p class="card-text text-justify">Tu computador necesita un mantenimiento cada 6 meses a un año
                                aproximadamente para poder funcionar correctamente.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 2</h5>
                            <p class="card-text text-justify">No necesitas ningún tippo de antivirus para tu windows 10,
                                pues tiene un sistema de defensas altamente efectivo de fábrica llamado windows defender</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 3</h5>
                            <p class="card-text text-justify">Tu procesador necesita de una pasta termica viscosa para que
                                el calor fluya correctamente. ésta tiene un tiempo de vida útil de 6 a 12 meses. USAMOS LA
                                MEJOR</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 4</h5>
                            <p class="card-text text-justify">La mayoría de mensajes que aparecen en tu computador en la
                                esquina inferior derecha son producto de paginas de publicidad maliciosas que pueden
                                infectar tu computador, IGNORALAS</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 5</h5>
                            <p class="card-text text-justify">Si no necesitas portabilidad NUNCA compres un portatil y NUNCA
                                compres un todo en uno bajo ninguna circunstacia. La mejor opción siempre será una torre.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 6</h5>
                            <p class="card-text text-justify">Un SSD puede aumentar la velocidad de tu compuador hasta unas
                                10 veces. La diferencia con un disco duro mecánico es enorme PRUEBALO.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 7</h5>
                            <p class="card-text text-justify">Puedes modificar el gabinete de tu PC para hacerlo gamer,
                                puedes hacerlo ver hermoso y hacerlo funcionar mejor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tip 8</h5>Sólo con mejorar el sistema de refrogeración de tu
                            computador, bajará la temperatura de tu procesador y así tu pc será más rápida.</p>
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
