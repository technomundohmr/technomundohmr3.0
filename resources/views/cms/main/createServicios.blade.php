@extends('cms.layout')
@section('content')
@include('cms.navbar')
    <div class="container p-5 my-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="{{ url('/servicios') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <h3 class="text-center">Nuevo Servicio</h3>
                    </div>
                    <div class="form-group">
                        <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Titulo">
                    </div>
                    <div class="form-group">
                        <input type="text" name="icono" id="icono" class="form-control" placeholder="icono">
                    </div>
                    <div class="form-group">
                        <input type="text" name="url" id="url" class="form-control" placeholder="Url de destino">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" placeholder="descripcion"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">Subir imagen</label>
                        <input type="file" name="img" id="img" class="form-control">
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
            <table class="table">
                <thead>
                    <tr class="table-primary">
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th></th>
                        <th></th>
                        <th>Icono</th>
                        <th>Imagen</th>
                        <th>url</th>
                        <th>eliminar</th>
                        <th>editar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($servicios ?? '' as $servicio)
                        <tr>
                            <td>{{ $servicio->titulo }}</td>
                            <td colspan="3">{{ $servicio->descripcion }}</td>
                            <td class="display-3"><i class="{{ $servicio->icono }}"></i></td>
                            <td><img src="{{ asset('storage') . '/' . $servicio->img }}" alt="" width="60%" loading="lazy"
                                    class="mx-auto"></td>
                            <td>{{ $servicio->url }}</td>
                            <td>
                                <a href="{{url('/servicios/'.$servicio -> id.'/edit')}}" class="btn btn-warning btn-lg">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ url('/servicios/' . $servicio->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-lg"
                                        onclick="return confirm('Borrar')"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('cms.footer')
@endsection
