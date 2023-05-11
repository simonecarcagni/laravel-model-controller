@extends('layouts.app')

@section('home-page')
    Home Page
@endsection

@section('content')
<div class="container d-flex flex-wrap justify-content-center">

    @foreach ($movies as $movie)
    
        <div class="card m-5">
            <div class="card-body">
                <h5 class="card-title">{{$movie['title']}}</h5>
                <h6 class="card-text">Titolo Originale: {{$movie['original_title']}}</h6>
                <h5 class="card-text">Voto: {{$movie['vote']}} </h5>
                <h6 class="card-text">Lingua: {{ Str::upper($movie['nationality']) }}</h6>
                <h5 class="card-text">Uscita: {{$movie['date']}} </h5>
            </div>
        </div>

    @endforeach

</div>  
@endsection