@extends('cms.layout')
@section('content')
@include('cms.navbar')
    <div class="container p-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1 class="text-center">Registra un nuevo admin</h1>
                <form action="{{url('/cms/admin/registro')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="number" class="form-control" name="identificacion" id="identificacion" placeholder="User">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="correo" id="correo" placeholder="correo">
                    </div>
                    <div class="form-group"><input type="password" class="form-control" name="password" id="password" placeholder="password"></div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Registrar</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    @include('cms.footer')
@endsection