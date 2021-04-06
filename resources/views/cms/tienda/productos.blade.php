@extends('cms.layout')
@section('content')
    @include('cms.navbar')
    <div class="container p-5 my-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="{{ url('/cms/tienda/productos') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <h3 class="text-center">Nuevo Producto</h3>
                    </div>
                    <div class="form-group">
                        <input type="text" name="titulo" id="titulo" class="form-control" placeholder="titulo">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="categoria">Categorías</label>
                        <select name="categoria" id="categoria" class="form-control">
                            <option value="Sin Categoria">Sin Categoria</option>
                            @foreach ($categorias ?? '' as $categoria)
                                <option value="{{ $categoria->categoria }}">{{ $categoria->categoria }}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="descripcion">Descripción corta del producto</label>
                        <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="Contenido">Contenido</label>
                        <textarea name="contenido" id="contenido" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="caracteristicas">caracteristicas</label>
                        <textarea name="caracteristicas" id="caracteristicas" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="link de Youtube">link de Youtube</label>
                        <textarea name="linkYoutube" id="linkYoutube" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <input type="number" name="precio" id="precio" class="form-control" placeholder="precio">
                    </div>
                    <hr>
                    <div class="form-group">
                        <input type="number" name="oferta" id="oferta" class="form-control" placeholder="% de oferta">
                    </div>
                    <div class="form-group">
                        <label for="premiun">¿premium?</label>
                        <select name="premiun" id="premiun" class="form-control">
                            <option value="0">no</option>
                           <option value="1">si</option>
                        </select>
                    </div>
                    <hr>
                    <div class="form-group text-danger">
                        <label for="imgMain"><strong> Subir imagen Principal</strong></label>
                        <input type="file" name="imgMain" id="imgMain" class="form-control">
                    </div>
                    <hr>
                    <div class="form-group text-primary">
                        <label for="img0">Subir imagen de la galeria</label>
                        <input type="file" name="img0" id="img0" class="form-control">
                    </div>
                    <hr>
                    <div class="form-group text-primary">
                        <label for="img1">Subir imagen de la galeria</label>
                        <input type="file" name="img1" id="img1" class="form-control">
                    </div>
                    <hr>
                    <div class="form-group text-primary">
                        <label for="img2">Subir imagen de la galeria</label>
                        <input type="file" name="img2" id="img2" class="form-control">
                    </div>
                    <hr>
                    <div class="form-group text-primary">
                        <label for="img3">Subir imagen de la galeria</label>
                        <input type="file" name="img3" id="img3" class="form-control">
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
                <table class="table">
                    <thead>
                        <tr class="table-primary">
                            <th>Titulo</th>
                            <th>Categoria</th>
                            <th colspan="2">Descripcion</th>
                            <th colspan="2">Contenido</th>
                            <th colspan="2">caracteristicas</th>
                            <th>link de Youtube</th>
                            <th>Precio</th>
                            <th>Oferta %</th>
                            <th>Premium</th>
                            <th colspan="2">Imagen Principal</th>
                            <th colspan="2">Imagen de galeria</th>
                            <th colspan="2">Imagen de galeria</th>
                            <th colspan="2">Imagen de galeria</th>
                            <th colspan="2">Imagen de galeria</th>
                            <th>eliminar</th>
                            <th>editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos ?? '' as $producto)
                            <tr>
                                <td>{{ $producto->titulo }} </td>
                                <td>{{ $producto->categoria }} </td>
                                <td colspan="2">{{ $producto->descripcion }} </td>
                                <td colspan="2">{{ $producto->contenido }} </td>
                                <td colspan="2">{{ $producto->caracteristicas }} </td>
                                <td>{{($producto->linkYoutube)}}</td>
                                <td>$ {{ $producto->precio }} </td>
                                <td>{{ $producto->oferta }} %</td>
                                <td>{{ $producto->premiun }} </td>
                                <td colspan="2"><img src="{{ asset('storage') . '/' . $producto->imgMain }}" alt="" width="100%"
                                        loading="lazy" class="mx-auto"></td>
                                <td colspan="2"><img src="{{ asset('storage') . '/' . $producto->img0 }}" alt="" width="80%"
                                        loading="lazy" class="mx-auto"></td>
                                <td colspan="2"><img src="{{ asset('storage') . '/' . $producto->img1 }}" alt="" width="80%"
                                        loading="lazy" class="mx-auto"></td>
                                <td colspan="2"><img src="{{ asset('storage') . '/' . $producto->img2 }}" alt="" width="80%"
                                        loading="lazy" class="mx-auto"></td>
                                <td colspan="2"><img src="{{ asset('storage') . '/' . $producto->img3 }}" alt="" width="80%"
                                        loading="lazy" class="mx-auto"></td>
                                <td>
                                    <form action="{{ url('/cms/tienda/productos/' . $producto->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-lg"
                                            onclick="return confirm('Borrar')"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{url('/cms/tienda/productos/'.$producto->id.'/edit')}}" class="btn btn-warning btn-lg"><i class="fas fa-pencil-alt"></i></a>
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
