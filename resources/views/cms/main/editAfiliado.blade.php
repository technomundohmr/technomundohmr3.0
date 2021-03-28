@extends('cms.layout')
@section('content')
    @include('cms.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3 class="text-center">
                    <strong>Correo: </strong>{{$afiliado->correo}}
                    <strong>Nombre: </strong>{{$afiliado->nombre}}
                    <strong>Saldo: </strong>{{$afiliado->saldo}}
                </h3>
                <form action="{{url('/afiliado/'.$afiliado->id)}}" method="post"></form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    @include('cms.footer')
@endsection