@extends('layouts.app')

@section('content')

<section class="cards py-5">

    <div class="container">
        <h1 class="text-uppercase mb-4">movie cards:</h1>
        <div class="row row-cols-2 row-cols-md-4 g-4">
            @forelse($movies as $movie)
            <div class="col">
                <div class="card p-2 text-center">
                    <div class="card-head">
                        <div> Title:{{$movie -> title}} </div>
                        <span> Original Title: {{$movie -> original_title}}</span>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="vote">Vote: {{$movie->vote}}</div>
                        <div class="nationality">Nationality: {{$movie->nationality}}</div>
                        <a class="mt-3 btn btn-secondary" href="{{route('details')}}">More Details </a>
                    </div>
                </div>
            </div>
            @empty
            <p>Ops! no movies available!</p>
            @endforelse
        </div>
    </div>
</section>

@endsection