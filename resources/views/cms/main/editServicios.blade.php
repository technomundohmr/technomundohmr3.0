@extends('cms.layout')
@section('content')
@include('cms.navbar')
    <div class="container p-5 my-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="{{ url('/servicios/'.$servicio->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH')}}
                    <div class="form-group">
                        <h3 class="text-center">Editar Servicio {{$servicio->id}}</h3>
                    </div>
                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $servicio->titulo }}">
                    </div>
                    <div class="form-group">
                        <label for="icono">Icono</label>
                        <input type="text" name="icono" id="icono" class="form-control" value="{{ $servicio->icono }}">
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" name="url" id="url" class="form-control" value="{{ $servicio->url }}">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" cols="30"
                            rows="10">{{ $servicio->descripcion }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Imagen Actual</label>
                        <img src="{{ asset('storage') . '/' . $servicio->img }}" alt="" width="100%" loading="lazy"
                            class="mx-auto">
                    </div>
                    <div class="form-group">
                        <label for="img">Nueva imagen</label>
                        <input type="file" name="img" id="img" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg btn-block">Editar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    @include('cms.footer')
@endsection
