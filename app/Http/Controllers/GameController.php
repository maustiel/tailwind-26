<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GameController extends Controller
{
    public function index(): View
    {
        $games = Game::orderBy('title')->get();

        return view('games.index', ['games' => $games]);
    }

    public function show(int $id): View
    {
        $game = Game::findOrFail($id);

        $loans = $game->loans()->with('member')->orderByDesc('borrowed_at')->get();

        return view('games.show', ['game' => $game, 'loans' => $loans]);
    }

    public function create(): View
    {
        return view('games.create', ['categories' => Game::CATEGORIES]);
    }

    public function store(Request $request): RedirectResponse
    {
        // Pas encore de validation : les champs sont enregistrés tels quels.
        $game = Game::create([
            'title' => $request->input('title'),
            'category' => $request->input('category'),
            'min_players' => $request->input('min_players'),
            'max_players' => $request->input('max_players'),
            'duration' => $request->input('duration'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('games.show', $game->id);
    }
}
