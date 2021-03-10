@extends('cms.layout')
@section('content')
    @include('cms.navbar')
    <div class="container py-5 my-5">
        <div class="row">
            <div class="col">
                @foreach ($cotizaciones as $cotizacion)
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Cliente: </strong> {{ $cotizacion->nombre }}</h5>
                            <ul>
                                <li><strong>Telefono: </strong> {{ $cotizacion->telefono }}</li>
                                <li><strong>Correo: </strong> {{ $cotizacion->correo }}</li>
                            </ul>
                            <div class="container ">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="card w-100">
                                            <div class="card-body">

                                                <h5 class="card-title">Negocio: {{ $cotizacion->negocio }}</h5>
                                                <h5 class="card-title">Descripcion: </h5>
                                                <p class="card-text">{{ $cotizacion->descripcion }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card w-100">
                                            <div class="card-body">
                                                <h5 class="card-title"><strong>Solicitud: </strong>
                                                    {{ $cotizacion->solicitado }}</h5>
                                                <h5 class="card-title"> <strong>Medio de pago: </strong> {{ $cotizacion->pago }}</h5>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">  
                                        <div class="card p-4 w-100">
                                            <form action="{{ url('/cotizacionWeb/' . $cotizacion->id) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger p-2"
                                                    onclick="return confirm('Borrar')"><i
                                                        class="fas fa-trash-alt display-4"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title my-2"><strong>Afiliado: </strong> {{ $cotizacion->afiliado }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('cms.footer')
@endsection
