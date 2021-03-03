@extends('cms.layout')
@section('content')
<div class="container p-5 my-5">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="{{url('/sliderMain')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <h3 class="text-center">Insertar Imagen para slider</h3>
                </div>
                <div class="form-group">
                    <input type="text" name="url" id="url" class="form-control" placeholder="Url de destino">
                </div>
                <div class="form-group">
                    <input type="file" name="img" id="img" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg">Guardar</button>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($imgs ?? '' as $img)
                    <tr>
                        <td colspan="6"><img src="{{asset('storage').'/'.$img->img}}" alt="" width="80%"></td>
                        <td>
                            <form action="{{url('/sliderMain/'.$img->id)}}" method="post">
                                {{ csrf_field() }}
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger px-5 py-3 btn-lg" onclick="return confirm('Borrar')">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>

@endsection
