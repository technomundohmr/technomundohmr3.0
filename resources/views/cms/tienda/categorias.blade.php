@extends('cms.layout')
@section('content')
@include('cms.navbar')
    <div class="container p-5 my-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="{{ url('/cms/tienda/categorias') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <h3 class="text-center">Nueva Categoria</h3>
                    </div>
                    <div class="form-group">
                        <input type="text" name="categoria" id="categoria" class="form-control" placeholder="categoria">
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
                        <th>Imagen</th>
                        <th>eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias ?? '' as $categoria)
                        <tr>
                            <td>{{ $categoria->categoria }}</td>
                            <td><img src="{{ asset('storage') . '/' . $categoria->img }}" alt="" width="60%" loading="lazy"
                                    class="mx-auto"></td>
                            <td>
                                <form action="{{ url('/cms/tienda/categorias/' . $categoria->id) }}" method="post">
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
