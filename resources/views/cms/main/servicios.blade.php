@extends('cms.layout')
@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="">

            </div>
            @foreach ($servicios ?? '' as $servicio)

                <style>
                    .linkservicios a{
                        text-decoration: none;
                    }

                </style>
                <div class="col-md-4 my-2">
                    <div class="card w-100 text-center linkservicios">
                        <div class="p-3">
                            <a class="linkservicios" href="{{ $servicio->url }}" target="_blank">
                                <h3>{{ $servicio->titulo }}</h3>
                                <img src="{{ asset('storage') . '/' . $servicio->img }}" alt="" width="80%" loading="lazy"
                                    class="mx-auto">
                                <div class="parrafo text-dark">{{ $servicio->descripcion }}</div>
                                <div class="display-1">
                                    <i class="{{ $servicio->icono }}"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
@endsection
