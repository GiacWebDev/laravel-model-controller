@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h1>Home</h1>
    </div>

    <div class="container mt-5 d-flex flex-wrap">

        @foreach ($movies as $movie)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title">{{ $movie->title }}</h3>
                    <h4>{{ $movie->original_title }}</h4>
                    <h5>{{ $movie->nationality }}</h5>
                    <p class="card-text">{{ $movie->date }}</p>
                    <p class="card-text">{{ $movie->vote }}</p>
                </div>
            </div>
        @endforeach


    </div>
@endsection
