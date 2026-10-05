<x-layouts.app title="Prêts">
    <h1>Prêts</h1>
    <p>{{ $loans->count() }} prêts, du plus récent au plus ancien.</p>

    @if ($loans->isEmpty())
        <p>Aucun prêt pour l'instant.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th scope="col">Jeu</th>
                    <th scope="col">Membre</th>
                    <th scope="col">Emprunté le</th>
                    <th scope="col">À rendre le</th>
                    <th scope="col">Rendu le</th>
                    <th scope="col">Statut</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($loans as $loan)
                    <tr>
                        <td><a href="{{ route('games.show', $loan->game->id) }}">{{ $loan->game->title }}</a></td>
                        <td>
                            {{ $loan->member->name }}
                            <br>
                            <span>{{ $loan->member->email }}</span>
                        </td>
                        <td>{{ $loan->borrowed_at->format('d/m/Y') }}</td>
                        <td>{{ $loan->due_at->format('d/m/Y') }}</td>
                        <td>
                            @if ($loan->returned_at !== null)
                                {{ $loan->returned_at->format('d/m/Y') }}
                            @else
                                —
                            @endif
                        </td>
                        <td>{{ $loan->statusLabel() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</x-layouts.app>
