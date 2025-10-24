@extends('app.bootstrap.template')


@section('content')
    <main class="px-3"> 
        <h1>{{ $peinado->name }}</h1> 
        <p class="lead">
            {{ $peinado->description}}
        </p>
        <p class="lead">
        </p>
        <p class="lead"> 
            <a href="#" class="btn btn-lg btn-light fw-bold border-white bg-white">{{$peinado->author}}</a> 
        </p> 
        <span class="fw-bold">
            {{ $peinado->hair}}
        {{ $peinado->price}}
        </span>
        
    </main>
@endsection