@extends('layouts.layout')
@section('title')
    Voy a modernizar mi empresa || Technomundo HMR@endsection
@endsection
@section('content')
<header>
    @include('main.logoHeader')
</header>
<section class="sticky-top bg-white">
    @include('main.navbar')
</section>
<section>
    @include('main.software1')
</section>
<section>
    @include('main.software2')
</section>  
    <br>
    <div class="container">
        
        <br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <li>Los <strong>Gestores de bases de datos de clientes, artículos y proveedores</strong>, son similares y sencillas de aprender y manejar. Son muy intuitivas.
                    Puedes crear clientes, proveedores o artículos con pocos o muchos datos; Puedes crear un código único para cada uno, o de lo contrario el sistema te asignará uno automáticamente. Luego puedes escribir nombre, descripción, datos personales básicos, precios, costos y datos específicos.
                    A pesar de que las bases de datos manejen muchos datos, el software permite crear nuevas entradas con información casi nula. Esto es para facilitar el trabajo de pequeñas empresas que manejan una cantidad menor de información.
                </li>
                <br>
                <li>El <strong>Gestor de órdenes de pedido, facturación, órdenes de compra y compras </strong>es bastante sencillo de utilizar y manejar. Es tan sencillo que con una sola tecla accedes a tu base de datos y con un solo click los puedes registrar. El sistema, automáticamente generará los datos correspondientes para tu trabajo. De cualquier forma los datos pueden ser modificados de manera sencilla y así es fácil trabajar.
                </li>
                <br>
                <li>El software cuenta con un <strong>POS (Punto de Ventas)</strong> incorporado, el cuál maneja diferentes diseños, que pueden ser modificados a gusto según sus necesidades. Puedes acceder a un punto de venta más gráfico y sencillo así como uno un poco más concreto. Manejan la posibilidad de diferentes plazas en mesas, para así poder adaptar tu punto de venta a restaurantes o atender a más de un cliente al mismo tiempo.
                    Se pueden organizar las mesas de manera personalizada y sencilla, así se podrá manejar el POS de manera intuitiva, gráfica y sencilla. Esto va a hacer que tus procesos de entrenamiento virtual sea mucho más sencillo.
                </li>
                <br>
                <div class="verMas">Deseo Recibir información <span class="icon-forward"></span></div>
            </div>

            <div class="col-md-2"></div>
        </div>
    </div>
<div class="container" id="precioWeb">
    <div class="row">
        <div class="col" id="total">
            <h1>Total $ 1.099.900</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" id="botonPrecio">
            <a href="">
                <div class="botonPrecio">
                    <h3>$ 899.900</h3>
                    <p>Pago con descuento</p>
                </div>
            </a>

        </div>
    </div>
</div>
<hr>
<div class="parrafo1">
    <a href="#cotizacion">
        <div class="container" id="estatica">
            <div class="row">
                <div class="col">
                    <h1>POS technomundo HMR</h1>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/POS.jpeg" alt="" width="80%">
                </div>
                <div class="col-md-6">
                    <h3>El sistema de POS de technomundo HMR destaca por ser el más intuitivo y fácil de usar.</h3>
                    <p>En una empresa es indispensable manejar todos los procesos de forma correcta y organizada. El software de POS de technomundo HMR permite llevar el registro de compras, vetas y cartera.
                    Nuestro software permitirte trabajar con intuitivos y sencillos gestores de ventas, compras, cartera, gestion de inventarios, maneo de cajero, entre otros.
                    </p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="verMas">Deseo Recibir información <span class="icon-forward"></span></div>
                </div>

                <div class="col-md-2"></div>
            </div>
        </div>
    </a>
    <div class="container" id="precioWeb">
        <div class="row">
            <div class="col" id="total">
                <h1>Total $ 499.900</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" id="botonPrecio">
                <a href="">
                    <div class="botonPrecio">
                        <h3>$ 299.900</h3>
                        <p>Pago con descuento</p>
                    </div>
                </a>

            </div>
        </div>
    </div>
</div><div class="cotizacion" id="cotizacion">
       <div class="headerForm">
           <h1>Contáctanos, estás a un paso de modernizar tu negocio.</h1>
       </div>
        <div class="formularioCotizacion">
           <h4 style="font-weight:bold">Estaremos felices de atenderte</h4>
           <h5>Dejanos tus datos y nos contactaremos contigo</h5>
            <form action="#cotizacion" method="post">
                <input type="text" name="nombre" placeholder="Nombre*" required>
                <input type="mail" name="mail" placeholder="Correo*" required>
                <input type="text" name="telefono" placeholder="Telefono*" required>
                <p>*Al pedir información aceptas nuestra política de tratamiento de datos personales*</p>
                <input type="submit" name="btnCotizacion" value="Pedir Información" class="boton">
            </form>
        </div>    
    </div>

    <footer>
        @include('layouts.footer')
        @include('cms.footer')
    </footer>

    @endsection