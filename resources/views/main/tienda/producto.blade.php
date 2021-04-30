@extends('layouts.layout')
@section('title')
    Tienda Technomundo
@endsection
@section('content')
    <header>
        @include('main.logoHeader')
    </header>
    <section class="sticky-top bg-white">
        @include('main.tienda.navbar')
    </section>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-primary display-5">{{$producto->titulo}}</h1>
                <h1 class="text-primary">_____________________</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                        <img class="d-block img-fluid" src="{{ asset('storage') . '/' . $producto->imgMain }}" alt="First slide" width="100%">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{ asset('storage') . '/' . $producto->img0 }}" alt="Second slide" width="100%">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{ asset('storage') . '/' . $producto->img1 }}" alt="Third slide" width="100%">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{ asset('storage') . '/' . $producto->img2 }}" alt="Third slide" width="100%">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{ asset('storage') . '/' . $producto->img3 }}" alt="Third slide" width="100%">
                      </div>
                    </div>
                    <a class="carousel-control-prev text-dark" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next text-dark" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
            <div class="col-md-6 px-5 text-justify">
                <h2>Descripcion</h2>
                <p>{{$producto->descripcion}}</p>
                <h2>Contenido</h2>
                <p>{{$producto->contenido}}</p>
                <h2>Caracteristicas</h2>
                <p>{{$producto->caracteristicas}}</p>
                <h1 class="text-primary text-center">Precio: $ {{$producto->precio}}</h1>
                <hr color="black">
                <form action="{{url('tienda/carrito')}}" method="post">
                  {{ csrf_field() }}
                  <input type="text" name="idProduct" id="idProduct" hidden value="{{$producto->id}}">
                  <div class="form-group">
                    <div class="input-group px-5">
                      <div class="input-group-prepend">
                        <label for="cantidad" class="input-group-text px-5"> <strong> Cantidad: </strong> </label>
                      </div>
                      <input type="number" name="cantidad" id="cantidad" class="form-control text-center font-weight-bold text-primary" value="1">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-danger btn-block btn-lg p-3">Comprar</button>
                </form>
            </div>
        </div>
        <hr color="black">
        <div class="row">
            <div class="col my-5 mx-auto">
                {!! ($producto->linkYoutube) !!}
            </div>
            
        </div>
        <hr color="black">
        <h1 class="text-center">Productos recomendados</h1>
        <hr color="black">
        <div class="row">    
            @include('main.tienda.productos')
        </div>
    </div>
    <hr>
    <footer>
        @include('layouts.footer')
        @include('cms.footer')
    </footer>
