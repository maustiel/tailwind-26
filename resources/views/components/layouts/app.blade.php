@props(['title' => 'Ludothèque'])

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} · Ludothèque des Tilleuls</title>
</head>
<body>
    <header>
        <a href="{{ route('games.index') }}">Ludothèque des Tilleuls</a>
        <nav aria-label="Navigation principale">
            <ul>
                <li><a href="{{ route('games.index') }}">Catalogue</a></li>
                <li><a href="{{ route('loans.index') }}">Prêts</a></li>
                <li><a href="{{ route('games.create') }}">Ajouter un jeu</a></li>
            </ul>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer>
        <p>Ludothèque des Tilleuls, rue des Tilleuls 12, 1300 Wavre. Ouverte le mercredi et le samedi, de 10 h à 17 h.</p>
        <p><a href="{{ route('styleguide') }}">Les composants du site</a></p>
    </footer>
</body>
</html>
