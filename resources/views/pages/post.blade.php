@extends('index')
@section('content')

    <div class="container mt-5 rounded-4 postStyl">
        <div class="row h-100">
            <div class="col-md-5 col-sm-12 text-center object-fit-cover h-100">
                <img src="{{asset($post->image)}}" class=" img-fluid object-fit-cover h-100 rounded-2" alt="">
            </div>
            <div class="col-md-7  col-sm-12 text-center">
                <div class=" mt-3"><h3>{{$post->title}}</h3></div>
                <hr>
                <div class=""><h4>{{$post->content}}</h4></div>
                <div><h5>{{$post->caption}}</h5></div>
            </div>
        </div>
    </div>

@endsection
