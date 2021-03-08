@extends('cms.layout')
@section('content')
<hr>
<div class="container p-5 m-3">
    @foreach ($imgs ?? '' as $img)
        <div class="row">
            <img src="{{asset('storage').'/'.$img->img}}" alt="" width="100%">
        </div>
        <hr>
    @endforeach  
</div>
@include('cms.footer')
@endsection
