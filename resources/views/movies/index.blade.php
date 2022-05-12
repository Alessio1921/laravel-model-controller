@extends('homepage')
@section('main-content')
  <div class="container">
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Titolo originale: {{$movie->original_title}}</div>
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <p class="card-text">Nazionalità: {{$movie->nationality}}</p>
                    <p class="card-text">Data di uscita: {{$movie->date}}</p>
                    <p class="card-text">Voto: {{$movie->vote}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
  </div>
@endsection