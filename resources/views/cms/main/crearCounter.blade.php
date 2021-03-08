@extends('cms.layout')
@section('content')
@include('cms.navbar')
    <div class="container p-5 my-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="{{ url('/counter') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="text" class="d-none" value="0" id="visitas" name="visitas">
                    <div class="form-group">
                        <h3 class="text-center">Registrar Nueva Campaña</h3>
                    </div>
                    <div class="form-group">
                        <input type="text" name="origen" id="origen" class="form-control" placeholder="origen">
                    </div>
                    <div class="form-group">
                        <input type="text" name="destino" id="destino" class="form-control" placeholder="destino">
                    </div>
                    <div class="form-group">
                        <input type="text" name="lead" id="lead" class="form-control" placeholder="Campañas">
                    </div>
                    <div class="form-group">
                        <input type="text" name="landing" id="landing" class="form-control" placeholder="URL landing">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg btn-block">Guardar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
        <hr>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr class="table-primary">
                            <th>
                            <strong>Id</strong>
                            </th>
                            <th>Origen</th>
                            <th>Destino</th>
                            <th>Campaña</th>
                            <th>landing</th>
                            <th>URL para compartir</th>
                            <th>Vistas</th>
                            <th>eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($metricas ?? '' as $metrica)
                            <tr>
                                <td>
                                    <strong>{{ $metrica->id }}</strong>
                                </td>
                                <td>{{ $metrica->origen }}</td>
                                <td>{{ $metrica->destino }}</td>
                                <td>{{ $metrica->lead }}</td>
                                <td>{{ $metrica->landing }}</td>
                                <td><input type="text" value="{{ url('/counter/' . $metrica->id) }}" readonly></td>
                                <td>{{ $metrica->visitas}}</td>
                                <td>
                                    <form action="{{ url('/counter/' . $metrica->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Borrar')"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    @include('cms.footer')
@endsection
