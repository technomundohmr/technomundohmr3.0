@extends('cms.layout')
@section('content')
    @include('cms.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                @foreach ($contactos as $contacto)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>{{$contacto -> nombre}}</th>
                            <th>{{$contacto -> telefono}}</th>
                            <th>{{$contacto -> correo}}</th>
                            <th>
                                <form action="{{ url('/contacto/' . $contacto->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger p-2"
                                        onclick="return confirm('Borrar')"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4">{{$contacto -> descripcion}}</td>
                        </tr>
                    </tbody>
                </table>
            @endforeach
            </div>
            <div class="col-md-3"></div>
          
        </div>
    </div>
    @include('cms.footer')
@endsection
