<div class="container my-5">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="{{url('/listaAfiliados')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="number" placeholder="Id" class="form-control" name="id">
                </div>
                <button class="btn btn-info btn-block btn-lg" type="submit">Buscar</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<hr>