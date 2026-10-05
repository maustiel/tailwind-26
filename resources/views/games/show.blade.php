<x-layouts.app>
    <x-slot:title>{{ $game->title }}</x-slot:title>

    <p><a href="{{ route('games.index') }}">← Retour au catalogue</a></p>

    <article>
        <img src="{{ asset($game->coverPath()) }}" alt="" width="400" height="300">

        <div>
            <p>{{ $game->category }}</p>
            <h1>{{ $game->title }}</h1>

            @if ($game->description !== null)
                <p>{{ $game->description }}</p>
            @endif

            <dl>
                <div>
                    <dt>Joueurs</dt>
                    <dd>{{ $game->playersLabel() }}</dd>
                </div>
                <div>
                    <dt>Durée</dt>
                    <dd>{{ $game->duration }} min</dd>
                </div>
                <div>
                    <dt>Prêts</dt>
                    <dd>{{ $loans->count() }}</dd>
                </div>
            </dl>
        </div>
    </article>

    <section>
        <h2>Historique des prêts</h2>

        @if ($loans->isEmpty())
            <p>Ce jeu n'a encore jamais été emprunté.</p>
        @else
            <ul>
                @foreach ($loans as $loan)
                    <li>
                        <p>{{ $loan->member->name }}</p>
                        <p>Emprunté le {{ $loan->borrowed_at->format('d/m/Y') }}, à rendre le {{ $loan->due_at->format('d/m/Y') }}</p>
                        <p>{{ $loan->statusLabel() }}</p>
                    </li>
                @endforeach
            </ul>
        @endif
    </section>
</x-layouts.app>
