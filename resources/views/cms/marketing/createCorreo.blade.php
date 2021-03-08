<form action="{{ url('/correo') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
    </div>
    <div class="form-group">
        <input type="email" name="email" id="email" class="form-control" placeholder="correo" required>
    </div>
    <div class="form-group">
        <input type="text" name="interes" id="interes" class="form-control" value="{{$interes}}" hidden readonly>
    </div> 
    <p class="peq">*Al suscribirte aceptas nuestras políticas de tratamiento de datos personales*</p>
    <div class="form-group">
        <button type="submit" class="btn btn-danger btn-lg btn-block">Suscribirme</button>
    </div>
</form>
