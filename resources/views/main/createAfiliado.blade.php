@extends('layouts.layout')
@section('title')
    Quiero ganar dinero con Technomundo HMR
@endsection
@section('content')
<header>
    @include('main.logoHeader')
</header>
<section>

    @php
        if(isset($_COOKIE['IDafiliado'])){
            $afiliado = $_COOKIE['IDafiliado'];
        }else{
            $afiliado = "no";
        }
    @endphp
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            {!! $errors->first('correo','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Cuidado!</strong> Por favor llena todos los datos
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>')
                
            !!}
            {!! $errors->first('password','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Cuidado!</strong> :message
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>')
                
            !!}
            {!! $errors->first('exception','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Cuidado!</strong> :message
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>')
                
            !!}
                <h1 class="text-center">Inscribirme como afiliado de technomundo HMR</h1>
                <h5 class="text-center">Para ganar dinero con nosotros, solo debes compartir tu enlace de afiliado.</h5>
                <form action="{{ url('/afiliado') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <hr>
                    <p class="text-primary">Datos personales</p>
                    <div class="form-group">
                        <input type="text" name="afiliado" id="afiliado" class="form-control" value="{{$afiliado}}" hidden>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="correo" id="correo" class="form-control" placeholder="correo" required>
                    </div>
                    <div class="form-group">
                        <label class="peq" for="telefono">Telefono preferiblemente con Whatsapp</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" required >
                    </div>
                    <div class="form-group">
                        <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion de residencia" required>
                    </div>
                    <hr>
                    <p class="text-primary">Datos de reembolso</p>
                    <div class="form-group">
                        <label for="metodoReembolso">¿Dónde puedes recibir tus pagos?</label>
                        <select name="metodoReembolso" id="metodoReembolso" class="form-control" required>
                            <option value="Nequi">Nequi</option>
                            <option value="Daviplata">Daviplata</option>
                            <option value="Paypal">Paypal</option>
                            <option value="Efecty">Efecty</option>
                        </select>    
                    </div> 
                    <div class="form-group">
                        <label for="cuentaReembolso">*Numero de nequi o daviplata, correo electronico de paypl o cedula de ciudadania para Efecty</label>  
                        <input type="text" name="cuentaReembolso" id="cuentaReembolso" class="form-control" placeholder="Cuenta para reembolso" required>
                    </div> 
                    <hr>
                    <p class="text-primary">Contraseña</p>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="contraseña" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password2" id="password2" class="form-control" placeholder="confirmar contraseña" required>
                    </div>
                    <hr>
                    <p class="text-primary">Identificación</p>
                    <div class="form-group">
                        <label for="documento">Tipo de documento</label>
                        <select name="documento" id="documento" class="form-control" required>
                            <option value="cc">C. C. </option>
                            <option value="ce">C. E.</option>
                            <option value="Pasaporte">Pasaporte</option>
                        </select> 
                    </div>
                    
                    <div class="form-group">
                        <input type="number" name="NoDocumento" id="NoDocumento" class="form-control" placeholder="Numero de documento" required>
                    </div>
                    
                    <p class="peq">*Al cotizar aceptas nuestras políticas de tratamiento de datos personales*</p>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-lg btn-block">Registrarme</button>
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