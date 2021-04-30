<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item mx-5 active">
                <a class="nav-link" href="{{url('/tienda')}}"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item mx-5 active">
                <a class="nav-link" href="{{url('/tienda/categorias')}}"><i class="fas fa-store"></i> Categorias</a>
            </li>
            <li class="nav-item mx-5 active">
                <a class="nav-link" href="{{url('/tienda/productos')}}"><i class="fas fa-business-time"></i> productos</a>
            </li>
        </ul>
    </div>
    <form action="{{url('tienda/busqueda')}}" method="post" class="form-inline ">
        {{ csrf_field() }}
        <div class="form-group mt-1">
            <input id="busqueda" name="busqueda" class="form-control " type="text" placeholder="Buscar">
        </div>
    </form>
    <a class="navbar-brand" href="{{url('tienda/carrito')}}">
      
        <h3 class="mx-5 my-auto"><strong><i class="fas fa-shopping-cart"></i></strong></h3> 
    </a>
    <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="text-light"><i class="fas fa-bars"></i></span>
    </button>
</nav>