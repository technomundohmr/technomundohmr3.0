@extends('layouts.layout')
@section('title')
    Technomundo HMR
@endsection
@section('content')
    <header>
        @include('main.logoHeader')
    </header>
    <section class="sticky-top bg-white">
        @include('main.navbar')
    </section>
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2">
                    <form action="{{url('/afiliadoLogout')}}" method="post">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Cerrar Sesion</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 class="display-5">Bienvenid@ {{$afiliado->nombre}}</h1>
            <p class="lead"> > Eres una persona inteligente e importante para nosotros. Solo tienes que compartir tu enlace de afiliado y automáticamente comisionarás el 20% de todo lo que compre tu afiliado.</p>
            <p class="lead"> > Ganate hasta el 10% de las ganancias de tus afiliados por 3 meses!!!</p>
            <hr class="my-4">
            <p>Este es tu enlace de afiliado solo copialo y compartelo.</p>
            <div class="form-group">
                <input type="text" id="enlace" class="form-control" value="{{url('/afiliaciones/'.$afiliado->id)}}" readonly>
            </div>
            <p class="lead">
                <button class="btn btn-primary btn-lg" id="botonCopy" ><i class="fa fa-copy"></i> Copiar</button>
            </p>
            <div class="alert alert-info alert-dismissible fade show d-none" id="alerta" role="alert">
                Copiado!!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <h5 class="card-header">Tus datos:</h5>
                    <div class="card-body">
                      <h5 class="card-title"><strong>Nombre: </strong>{{$afiliado->nombre}}</h5>
                      <p class="card-text"><strong>correo: </strong>{{$afiliado->correo}}</p>
                      <p class="card-text"><strong>telefono: </strong>{{$afiliado->telefono}}</p>
                      <p class="card-text"><strong>direccion: </strong>{{$afiliado->direccion}}</p>
                      <form action="afiliado/edit/{{$afiliado->id}}" method="post">
                        <button type="submit" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar</button>
                      </form>
                    </div>
                  </div>    
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">Pedir retiro!!</h5>
                    <div class="card-body">
                        <h5 class="card-title"><strong>Metodo de retiro: </strong>{{$afiliado->metodoReembolso}}</h5>
                        <p class="card-text"><strong>cuenta: </strong>{{$afiliado->cuentaReembolso}}</p>
                        <p>El reembolso puede tomar hasta 3 dias habiles en verse reflejado</p>
                        <a href="#" class="btn btn-success">Pedir Reembolso</a>
                    </div>
                  </div>    
            </div>
        </div>
    </div>
    
    <footer>
        @include('layouts.footer')
        @include('cms.footer')
    </footer>
@endsection
