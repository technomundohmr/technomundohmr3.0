@foreach ($productos as $producto)
<div class="col-md-3 m-3 productos">
    <a href="{{url("tienda/producto/$producto->id")}}">
        <img src="{{ asset('storage') . '/' . $producto->imgMain }}" alt="" width="100%" height="280px">
        <hr size="5" color="blue">
        <h5 class="text-primary text-center"><strong>{{ $producto->titulo }} </strong><span class="peq">
                cod.</span>({{ $producto->id }})</h5>
        
        <table class="table table-bordered text-center">
            <tr>
                <td class="">
                    <h5 class="my-2"><strong>$ {{ $producto->precio }}</strong></h5>
                </td>
                <td><a href="{{url("tienda/producto/$producto->id")}}" class="btn btn-danger">Lo quiero</a></td>
            </tr>
        </table>
    </a>
</div>
@endforeach