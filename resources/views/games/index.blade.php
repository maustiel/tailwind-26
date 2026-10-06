<x-layouts.app title="Catalogue">
    <div class="mb-8">
        <h1 class="text-3xl font-semibold tracking-tight">Catalogue</h1>
        <p class="mt-2 text-zinc-600">{{ $games->count() }} jeux à emprunter pour trois semaines.</p>
    </div>

    @if ($games->isEmpty())
        <p>Aucun jeu dans le catalogue.</p>
    @else
       <ul class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    @foreach ($games as $game)
        <li>
            <x-card class="h-full transition-shadow hover:shadow-md">
                <x-slot:image>
                    <img src="{{ asset($game->coverPath()) }}" alt="" width="400" height="300" class="aspect-4/3 w-full object-cover">
                </x-slot:image>

                <p class="text-xs font-semibold tracking-wide text-brand-700 uppercase">{{ $game->category }}</p>
                <h2 class="mt-1 text-lg font-semibold">
                    <a href="{{ route('games.show', $game->id) }}" class="rounded-sm hover:underline hover:underline-offset-4 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand-600">{{ $game->title }}</a>
                </h2>
                <p class="mt-2 text-sm text-zinc-600">{{ $game->playersLabel() }} · {{ $game->duration }} min</p>
            </x-card>
        </li>
    @endforeach
</ul>
    @endif
</x-layouts.app>
