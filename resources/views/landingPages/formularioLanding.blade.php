<form action="{{ url('/correo') }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="destino" value="{{$destino}}">
    <div class="form-group">
        <input type="hidden" name="nombre" value="none">
        <input type="hidden" name="interes" value="{{$destino}}">
        <input required type="text" name="email" id="email" class="form-control text-primary mt-5"
            placeholder="Correo donde recibirás tu curso">
    </div>
    <input type="submit" value="Quiero recibir mi curso" class="btn btn-danger btn-block" >
</form>