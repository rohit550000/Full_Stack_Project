<a href="{{ route('user.showmovies', $movie->id) }}">
    <div class="card">
        <img class="cardsimg" src="/movimages/{{ $movie->img }}" >
        <div class="cardsDetails">
            <div class="cardTitle">{{ $movie->title }}</div>
            <div class="cardRuntime">
                 {{ $movie->publicationdate }}
            </div>
            <div class="cardDescription">{{ $movie->description }}</div>
        </div>
    </div>
</a>