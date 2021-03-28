<div class="container">
    <div class="row">
        <div class="col-md-0"></div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr >
                            <th class="table-info"><strong>Id</strong></th>
                            <th class="table-primary" >Nombre</th>
                            <th class="table-primary" >Telefono</th>
                            <th class="table-primary" >Correo</th>
                            <th class="table-primary" >Direccion</th>
                            <th class="table-primary" >Metodo</th>
                            <th class="table-primary" >Cuenta</th>
                            <th class="table-primary" >Saldo</th>
                            <th class="table-success">Sumar Saldo</th>
                            <th class="table-danger">Restar Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($afiliados as $afiliado)
                        <tr>
                            <td class="table-info"><strong>{{$afiliado->id}}</strong></td>
                            <td>{{$afiliado->nombre}}</td>
                            <td>{{$afiliado->telefono}}</td>
                            <td>{{$afiliado->correo}}</td>
                            <td>{{$afiliado->direccion}}</td>
                            <td>{{$afiliado->metodoReembolso}}</td>
                            <td>{{$afiliado->cuentaReembolso}}</td>
                            <td>$ {{$afiliado->ganancia}}</td>
                            <td>
                                <form action="{{url("listaAfiliados/$afiliado->id")}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH')}}
                                    <input type="hidden" id="operacion" name="operacion" value="+">
                                    <button type="submit" class="btn btn-success btn-lg"> + </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{url("listaAfiliados/$afiliado->id")}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH')}}
                                    <input type="hidden" id="operacion" name="operacion" value="-">
                                    <button type="submit" class="btn btn-danger btn-lg"> - </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-0"></div>
    </div>
</div>