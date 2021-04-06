@extends('cms.layout')
@section('content')
    @include('cms.navbar')
    <div class="container p-5 my-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="{{ url('/cms/tienda/productos/'.$producto->id) }}" method="post" enctype="multipart/form-data">
                    {{ method_field('PATCH')}}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <h3 class="text-center">Producto {{$producto->id}}</h3>
                    </div>
                    <div class="form-group">
                        <label for="titulo">titulo</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" value="{{$producto->titulo}}">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="categoria">Categorías</label>
                        <select name="categoria" id="categoria" class="form-control">
                            <option value="{{$producto->categoria}}">{{$producto->categoria}}</option>
                            <option value="Sin Categoria">Sin Categoria</option>
                            @foreach ($categorias ?? '' as $categoria)
                                <option value="{{ $categoria->categoria }}">{{ $categoria->categoria }}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="descripcion">Descripción corta del producto</label>
                        <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control">{{$producto->descripcion}}</textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="Contenido">Contenido</label>
                        <textarea name="contenido" id="contenido" cols="30" rows="10" class="form-control">{{$producto->contenido}}</textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="caracteristicas">caracteristicas</label>
                        <textarea name="caracteristicas" id="caracteristicas" cols="30" rows="10" class="form-control">{{$producto->caracteristicas}}</textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="link de Youtube">link de Youtube</label>
                        <textarea name="linkYoutube" id="linkYoutube" cols="30" rows="10" class="form-control">{{$producto->linkYoutube}}</textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="precio">precio</label>
                        <input type="number" name="precio" id="precio" class="form-control" value="{{$producto->precio}}">
                    </div>
                    <hr>
                    <div class="form-group">
                        <input type="number" name="oferta" id="oferta" class="form-control" value="{{$producto->oferta}}">
                    </div>
                    <div class="form-group">
                        <label for="premiun">¿premium?</label>
                        <select name="premiun" id="premiun" class="form-control">
                            <option value="{{$producto->premiun}}">{{$producto->premiun}}</option>
                            <option value="0">no</option>
                           <option value="1">si</option>
                        </select>
                    </div>
                    <hr>
                    <div class="form-group text-danger">
                        <label for="imgMain"><strong> Subir imagen Principal</strong></label>
                        <img src="{{ asset('storage') . '/' . $producto->imgMain }}" alt="" width="100%"
                                        loading="lazy" class="mx-auto">
                        <input type="file" name="imgMain" id="imgMain" class="form-control">
                    </div>
                    <hr>
                    <div class="form-group text-primary">
                        <label for="img0">Subir imagen de la galeria</label>
                        <img src="{{ asset('storage') . '/' . $producto->img0 }}" alt="" width="80%"
                                        loading="lazy" class="mx-auto">
                        <input type="file" name="img0" id="img0" class="form-control">
                    </div>
                    <hr>
                    <div class="form-group text-primary">
                        <label for="img1">Subir imagen de la galeria</label>
                        <img src="{{ asset('storage') . '/' . $producto->img1 }}" alt="" width="80%"
                                        loading="lazy" class="mx-auto">
                        <input type="file" name="img1" id="img1" class="form-control">
                    </div>
                    <hr>
                    <div class="form-group text-primary">
                        <label for="img2">Subir imagen de la galeria</label>
                        <img src="{{ asset('storage') . '/' . $producto->img2 }}" alt="" width="80%"
                                        loading="lazy" class="mx-auto">
                        <input type="file" name="img2" id="img2" class="form-control">
                    </div>
                    <hr>
                    <div class="form-group text-primary">
                        <label for="img3">Subir imagen de la galeria</label>
                        <img src="{{ asset('storage') . '/' . $producto->img3 }}" alt="" width="80%"
                                        loading="lazy" class="mx-auto">
                        <input type="file" name="img3" id="img3" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning btn-lg btn-block">Editar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    @include('cms.footer')
@endsection
