<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-center text-primary"> <strong>Categorias</strong> </h2>
            <h2 class="text-center text-primary">________________</h2>
        </div>
    </div>
    <div class="row">
        @foreach ($categorias as $categoria)
            <div class="col-md-4 categoria" >
                <a href="{{url('/tienda/categorias/'.$categoria->categoria)}}">
                    <div class="contenedor-categoria m-3" style="background-image: url({{asset('storage') . '/' . $categoria->img}}); ">
                        <div class="nombre-categoria text-center">
                            <h1>{{$categoria->categoria}}</h1>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>