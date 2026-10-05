<x-layouts.app title="Catalogue">
    <h1>Catalogue</h1>
    <p>{{ $games->count() }} jeux à emprunter pour trois semaines.</p>

    @if ($games->isEmpty())
        <p>Aucun jeu dans le catalogue.</p>
    @else
        <ul>
            @foreach ($games as $game)
                <li>
                    <article>
                        <img src="{{ asset($game->coverPath()) }}" alt="" width="400" height="300">
                        <p>{{ $game->category }}</p>
                        <h2><a href="{{ route('games.show', $game->id) }}">{{ $game->title }}</a></h2>
                        <p>{{ $game->playersLabel() }} · {{ $game->duration }} min</p>
                    </article>
                </li>
            @endforeach
        </ul>
    @endif
</x-layouts.app>
