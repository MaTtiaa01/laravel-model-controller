@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row row-cols-2 row-cols-md-4">
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
                </div>
            </div>
        </div>
        @empty

        @endforelse
    </div>
</div>

@endsection