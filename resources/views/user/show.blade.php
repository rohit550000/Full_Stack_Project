@extends('layouts.main')

@section('content')
    <div class="movieContainer">
        <div class="BackImageContainer">
             <img class="BackImage"  src="/movimages/{{ $movie->img }}" >
        </div>
        <div class="moviDetail">
            <div class="movieLeft">
               <img class="insideImg"  src="/movimages/{{ $movie->img }}" >
            </div>
            <div class="rightDetail">
                <div class="movie__detailRightTop">
                    <div class="mName">Title: {{ $movie->title }}</div>
                    <div class="mRuntime">Runtime: {{ $movie->runtime }} Min</div>
                    <div class="mReleaseDate">Publish date: {{ $movie->publicationdate }}</div>
                </div>
                <div class="synopsisDetail">
                    <div class="synopText">Description</div>
                    <div class="sysDescrip">{{ $movie->description }}</div>
                </div>
            </div>
        </div>
    </div>

@endsection
