@extends('cms.layout')
@section('content')
    @include('cms.navbar')
    <div class="container py-5 my-5">
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr class="table-info">
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>telefono</th>
                                <th>negocio</th>
                                <th>solicitud</th>
                                <th>Afiliado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pruebas as $prueba)
                                <tr>
                                    <td>{{ $prueba->nombre }}</td>
                                    <td>{{ $prueba->email }}</td>
                                    <td>{{ $prueba->telefono }}</td>
                                    <td>{{ $prueba->negocio }}</td>
                                    <td>{{ $prueba->solicitado }}</td>
                                    <td class="table-warning">{{ $prueba->afiliado }}</td>
                                    <td>
                                        <form action="{{ url('/pruebaSoftware/' . $prueba->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger p-2"
                                                onclick="return confirm('Borrar')"><i
                                                    class="fas fa-trash-alt"></i></button>
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
