
            <div class="table-responsive">
                <table class="table table-bordered ">
                    <thead>
                        <tr >
                            <th class="table-info"><strong>Id</strong></th>
                            <th class="table-primary" >Nombre</th>
                            <th class="table-primary" >Telefono</th>
                            <th class="table-primary" >Correo</th>
                            <th class="table-primary" >Metodo</th>
                            <th class="table-primary" >Cuenta</th>
                            <th class="table-primary" >Saldo</th>
                            <th class="table-primary" ></th>
                            <th class="table-success">Sumar Saldo</th>
                            <th class="table-success"></th>
                            <th class="table-success"></th>
                            <th class="table-danger">Restar Saldo</th>
                            <th class="table-danger"></th>
                            <th class="table-danger"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($afiliados as $afiliado)
                        <tr>
                            <td class="table-info"><strong>{{$afiliado->id}}</strong></td>
                            <td>{{$afiliado->nombre}}</td>
                            <td>{{$afiliado->telefono}}</td>
                            <td>{{$afiliado->correo}}</td>
                            <td>{{$afiliado->metodoReembolso}}</td>
                            <td>{{$afiliado->cuentaReembolso}}</td>
                            <td colspan="2">$ {{$afiliado->ganancia}}</td>
                            <td colspan="3">
                                <form action="{{url("listaAfiliados/$afiliado->id")}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH')}}
                                    <input type="hidden" id="operacion" name="operacion" value="+">
                                    <div class="form-group">
                                        <input type="number" name="valor" id="valor" placeholder="valor" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg ml-4"> + </button>
                                </form>
                            </td>
                            <td colspan="3">
                                <form action="{{url("listaAfiliados/$afiliado->id")}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH')}}
                                    <input type="hidden" id="operacion" name="operacion" value="-">
                                    <div class="form-group">
                                        <input type="number" name="valor" id="valor" placeholder="valor" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-danger btn-lg ml-4"> - </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>