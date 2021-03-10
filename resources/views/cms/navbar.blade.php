<nav class="navbar navbar-light bg-info mb-5">
    <a class="navbar-brand px-5" href="{{url('/cms/admin')}}"><img src="{{url('/img/logo.png')}}" alt="" width="120px"></a>
@auth
    <form action="{{url('/logout')}}" method="post">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-light">cerrar sesion</button>
    </form>
@endauth
</nav>