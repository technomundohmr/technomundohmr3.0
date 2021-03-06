@extends('cms.layout')
@section('content')
@include('cms.navbar')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <a href="" class="btn btn-success btn-lg btn-block">Crear Newsletter</a>
            </div>
            <div class="col-md-4"></div>
        </div>
        <hr>
        <div class="row pt-5">
            <div class="col">
                <h3 class="text-center">Suscripciones</h3>
            </div>
        </div>
        <div class="row my-5">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-primary">
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Interés</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($correos as $correo)
                                <tr>
                                    <td>{{$correo->nombre}}</td>
                                    <td>{{$correo->email}}</td>
                                    <td>{{$correo->interes}}</td>
                                    <td>
                                        <form action="{{ url('/correo/' . $correo->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Borrar')">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('cms.footer')
@endsection
