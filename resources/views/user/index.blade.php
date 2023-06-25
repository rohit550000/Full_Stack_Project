@extends('layouts.main')

@section('content')
    <div class="PosterContent">
    <div class="movilistcontainer">
        <div class="ListOfMovi">
            <div class="headerr">
            <h2 class="listTitle">List of movies</h2>
            </div>
            <div class="listOfcards">
                @foreach ($moviapidata as $movie)
                <x-card-of-movies :movie="$movie" />
                @endforeach
            </div>
        </div>
    </div>
@endsection

