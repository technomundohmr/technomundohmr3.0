@extends('layouts.layout')
@section('title')
    Tienda Technomundo
@endsection
@section('content')
    <header>
        @include('main.logoHeader')
    </header>
    <section class="sticky-top bg-white">
        @include('main.tienda.navbar')
    </section>
    <section>
        <div class="container">
            <div class="row mt-3">
                <div class="col-8">

                </div>
                <div class="col-4">
                    <a href="{{url('tienda/vaciarCarrito')}}" class="btn btn-warning ">Vaciar Carro</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    @php
                        if (isset($_COOKIE['carrito'])) {
                            $carrito = $_COOKIE['carrito'];
                        } else {
                            $carrito = '';
                            $total = 0;
                            $subtotal = 0;
                        }
                    @endphp
                    @if ($carrito == '')
                        @include('main.tienda.carritoVacio')
                    @else
                    <div class="table-responsive mt-2">
                        <table class="table text-center table-bordered">
                            <thead>
                                <tr class="table-primary">
                                    <th>Id</th>
                                    <th>Producto</th>
                                    <th>Vr. Unitario</th>
                                    <th>Cantidad</th>
                                    <th>Vr. Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $carrito = json_decode($carrito, true);
                                $subtotal = 0;
                               for ($i=0; $i<count($carrito) ; $i++) { 
                                    echo '<tr>';
                                        echo '<td>'.$carrito[$i]['id'].'</td>';     
                                        echo '<td>'.$carrito[$i]['Producto'].'</td>'; 
                                        echo '<td>'.$carrito[$i]['Vr'].'</td>'; 
                                        echo '<td>'.$carrito[$i]['cantidad'].'</td>'; 
                                        echo '<td>'.$carrito[$i]['VrTotal'].'</td>';
                                    echo '<tr>';
                                    $subtotal = $subtotal +  $carrito[$i]['VrTotal'];
                                }
                                $total = $subtotal + 8000;
                                @endphp
                            </tbody>
                        </table>
                    </div>
                      
                    @endif

                </div>
                <div class="col-md-5">
                    <form action="{{url('tienda/pedido')}}" method="post">
                        {{ csrf_field() }}
                        @php
                        if (isset($_COOKIE['IDafiliado'])) {
                            $afiliado = $_COOKIE['IDafiliado'];
                        } else {
                            $afiliado = 'no';
                        }
                    @endphp
                        <h2 class="text-center my-3 text-primary">Formulario de compra</h2>
                            <input type="hidden" name="afiliado" value="{{$afiliado}}">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nombreCliente" id="nombreCliente"
                                    placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="telefonoCliente" id="telefonoCliente"
                                    placeholder="telefono" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="correoCliente" id="correoCliente"
                                    placeholder="correo" required>
                            </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="direccionCliente" id="direccionCliente"
                                placeholder="direccion de entrega" required>
                        </div>
                        <input type="text" name="total" id="total" class="d-none" readonly value="{{ $total }}">
                        <hr color="blue">
                        <h4 class="text-center">Subtotal: $ {{$subtotal}}</h4>
                        <h4 class="text-center">Envio: $ $7.990</h4>
                        <h3 class="text-center">Total: $ {{ $total }}</h3>
                        <img src="{{url('img/banerPago.jpg')}}" alt="" width="100%">
                        <div class="form-group mt-3">
                            <label for="FormaPago" class="text-primary"> <strong>Forma de Pago:</strong>  </label>
                            <select name="FormaPago" id="FormaPago" class="form-control">
                                <option value="Pago contra entrega">Pago contra entrega</option>
                                <option value="Nequi">Nequi</option>
                                <option value="Pay U">Pay U</option>
                                <option value="Daviplata">Daviplata</option>
                            </select>
                        </div>
                        <button type="submit" class="btn-danger btn-block btn-lg btn">Comprar</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <hr>
    <footer>
        @include('layouts.footer')
        @include('cms.footer')
    </footer>
