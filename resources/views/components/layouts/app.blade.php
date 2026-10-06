@props(['title' => 'Ludothèque'])

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>{{ $title }} · Ludothèque des Tilleuls</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex min-h-screen flex-col bg-zinc-50 font-sans text-zinc-900 antialiased">
    <header class="border-b border-zinc-200 bg-white">
    <div class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-x-6 gap-y-2 px-4 py-3 sm:px-6 lg:px-8">
        <a href="{{ route('games.index') }}" class="flex items-center gap-2 rounded-md text-lg font-semibold tracking-tight focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-brand-600">
            <span class="grid size-8 place-items-center rounded-lg bg-brand-600 text-sm font-semibold text-white" aria-hidden="true">LT</span>
            Ludothèque des Tilleuls
        </a>
        <nav aria-label="Navigation principale">
            <ul>
                <li><a href="{{ route('games.index') }}">Catalogue</a></li>
                <li><a href="{{ route('loans.index') }}">Prêts</a></li>
                <li><a href="{{ route('games.create') }}">Ajouter un jeu</a></li>
            </ul>
        </nav>
    </header>

       <main class="mx-auto w-full max-w-6xl flex-1 px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        {{ $slot }}
    </main>

    <footer class="border-t border-zinc-200">
        <div class="mx-auto flex max-w-6xl flex-col gap-2 px-4 py-6 text-sm text-zinc-500 sm:flex-row sm:justify-between sm:px-6 lg:px-8">
            <p>Ludothèque des Tilleuls, rue des Tilleuls 12, 1300 Wavre. Ouverte le mercredi et le samedi, de 10 h à 17 h.</p>
            <p><a href="{{ route('styleguide') }}" class="underline underline-offset-4 hover:text-zinc-900">Les composants du site</a></p>
        </div>
    </footer>
</body>
</html>
