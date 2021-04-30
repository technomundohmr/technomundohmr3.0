<form action="{{ url('/landingcursoPOS') }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="destino" value="{{$destino}}">
    <input type="hidden" name="interes" value="{{$destino}}">

    <div class="form-group mt-5 text-primary">
        <input required type="text" name="nombre" class="form-control" placeholder="nombre">
    </div>
    <div class="form-group">
        <input required type="text" name="email" id="email" class="form-control text-primary"
        placeholder="Correo o linea WHATSAPP // donde recibirás tu curso">
    </div>
    <input type="submit" value="Quiero recibir mi curso" class="btn btn-danger btn-block" >
</form>