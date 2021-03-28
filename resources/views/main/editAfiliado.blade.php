@extends('layouts.layout')
@section('title')
    {{$afiliado->nombre}}
@endsection
@section('content')
<header>
    @include('main.logoHeader')
</header>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 class="text-center">Technomundo HMR</h1>
                <h5 class="text-center">Para ganar dinero con nosotros, solo debes compartir tu enlace de afiliado.</h5>
                <form action="{{ url('/afiliado/'.$afiliado->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH')}}
                    <hr>
                    <p class="text-primary">Datos personales</p>
                    <div class="form-group">
                        <label for="nombre">Nombre: </label>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="{{$afiliado->nombre}}" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono preferiblemente con Whatsapp</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" value="{{$afiliado->telefono}}" required >
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input type="text" name="direccion" id="direccion" class="form-control" value="{{$afiliado->direccion}}" required>
                    </div>
                    <hr>
                    <p class="text-primary">Datos de reembolso si quieres ganar dinero con nosotros o para garantias.</p>
                    <div class="form-group">
                        <label for="metodoReembolso">¿Dónde puedes recibir tus pagos?</label>
                        <select name="metodoReembolso" id="metodoReembolso" class="form-control" required>
                            <option value="{{$afiliado->metodoReembolso}}">{{$afiliado->metodoReembolso}}</option>
                            <option value="Nequi">Nequi</option>
                            <option value="Daviplata">Daviplata</option>
                            <option value="Paypal">Paypal</option>
                            <option value="Efecty">Efecty</option>
                        </select>    
                    </div> 
                    <div class="form-group">
                        <label for="cuentaReembolso">*Numero de nequi o daviplata, correo electronico de paypl o cedula de ciudadania para Efecty</label>  
                        <input type="text" name="cuentaReembolso" id="cuentaReembolso" class="form-control" value="{{$afiliado->cuentaReembolso}}" required>
                    </div> 
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-lg btn-block">Editar</button>
                    </div>
                </form>
                
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
<footer>
    @include('cms.footer')
</footer>
@endsection