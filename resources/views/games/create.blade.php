<x-layouts.app title="Ajouter un jeu">
    <h1>Ajouter un jeu</h1>
    <p>Le jeu rejoint le catalogue dès l'enregistrement.</p>

    <form method="POST" action="{{ route('games.store') }}">
        @csrf

        <div>
            <label for="title">Titre</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div>
            <label for="category">Catégorie</label>
            <select id="category" name="category" required>
                @foreach ($categories as $category)
                    <option>{{ $category }}</option>
                @endforeach
            </select>
        </div>

        <fieldset>
            <legend>Nombre de joueurs</legend>

            <div>
                <label for="min_players">Minimum</label>
                <input type="number" id="min_players" name="min_players" min="1" max="20" value="2" required>
            </div>

            <div>
                <label for="max_players">Maximum</label>
                <input type="number" id="max_players" name="max_players" min="1" max="20" value="4" required>
            </div>
        </fieldset>

        {{-- Exemple d'état d'erreur, écrit en dur : le formulaire ne vérifie encore rien. --}}
        <div>
            <label for="duration">Durée d'une partie, en minutes</label>
            <input type="number" id="duration" name="duration" min="5" required aria-invalid="true" aria-describedby="duration-error">
            <p id="duration-error">Indiquez une durée en minutes, par exemple 45.</p>
        </div>

        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="4" aria-describedby="description-hint"></textarea>
            <p id="description-hint">Facultatif. Deux ou trois phrases suffisent.</p>
        </div>

        <div>
            <button type="submit">Ajouter le jeu</button>
            <a href="{{ route('games.index') }}">Annuler</a>
        </div>
    </form>
</x-layouts.app>
