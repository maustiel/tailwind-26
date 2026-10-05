<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::create([
            'title' => 'Les Comptoirs de Safran',
            'description' => 'Ouvrez des comptoirs le long de la route des épices et négociez chaque cargaison. Le plus riche marchand au bout de six saisons l\'emporte.',
            'category' => 'Stratégie',
            'min_players' => 2,
            'max_players' => 4,
            'duration' => 90,
            'cover' => 'images/covers/comptoirs-de-safran.svg',
        ]);

        Game::create([
            'title' => 'Marée d\'étoiles',
            'description' => 'Ensemble, guidez un navire à travers une mer de constellations avant que la marée ne recouvre le ciel. Tout le monde gagne ou tout le monde perd.',
            'category' => 'Coopératif',
            'min_players' => 1,
            'max_players' => 4,
            'duration' => 45,
            'cover' => 'images/covers/maree-d-etoiles.svg',
        ]);

        Game::create([
            'title' => 'Le Jardin hexagonal',
            'description' => 'Posez des tuiles hexagonales pour faire pousser le plus beau jardin du quartier. Les règles s\'expliquent en cinq minutes.',
            'category' => 'Familial',
            'min_players' => 2,
            'max_players' => 4,
            'duration' => 30,
            'cover' => 'images/covers/jardin-hexagonal.svg',
        ]);

        Game::create([
            'title' => 'Grand Tapage au marché',
            'description' => 'Criez plus fort que les autres marchands pour attirer les clients, mais sans dire le mot interdit de la manche.',
            'category' => 'Ambiance',
            'min_players' => 4,
            'max_players' => 10,
            'duration' => 20,
            'cover' => 'images/covers/grand-tapage.svg',
        ]);

        Game::create([
            'title' => 'Les Sept Lanternes',
            'description' => 'Rallumez les sept lanternes du village avant la nuit la plus longue de l\'année, en partageant vos cartes sans jamais les montrer.',
            'category' => 'Coopératif',
            'min_players' => 2,
            'max_players' => 5,
            'duration' => 60,
            'cover' => 'images/covers/sept-lanternes.svg',
        ]);

        Game::create([
            'title' => 'Pique et Plume',
            'description' => 'Un jeu de plis rapide où chaque carte jouée change la couleur d\'atout. Idéal pour finir une soirée.',
            'category' => 'Cartes',
            'min_players' => 2,
            'max_players' => 6,
            'duration' => 15,
            'cover' => 'images/covers/pique-et-plume.svg',
        ]);

        Game::create([
            'title' => 'L\'Atlas du Nord',
            'description' => 'Explorez des terres inconnues, dessinez votre carte et remplissez les objectifs secrets de la guilde des cartographes.',
            'category' => 'Stratégie',
            'min_players' => 1,
            'max_players' => 5,
            'duration' => 75,
            'cover' => 'images/covers/atlas-du-nord.svg',
        ]);

        Game::create([
            'title' => 'Le Moulin des quatre vents',
            'description' => 'Faites tourner votre moulin au gré du vent et livrez votre farine aux boulangers du bourg avant vos voisins.',
            'category' => 'Familial',
            'min_players' => 2,
            'max_players' => 4,
            'duration' => 40,
            'cover' => 'images/covers/moulin-quatre-vents.svg',
        ]);

        Game::create([
            'title' => 'Code Corail',
            'description' => 'Retrouvez la combinaison de couleurs cachée par votre adversaire en posant les bonnes questions. Un duel de déduction.',
            'category' => 'Réflexion',
            'min_players' => 2,
            'max_players' => 2,
            'duration' => 25,
            'cover' => 'images/covers/code-corail.svg',
        ]);

        Game::create([
            'title' => 'Mille Pétales',
            'description' => 'Composez des bouquets avec les cartes du marché aux fleurs. Chaque couleur rapporte plus quand elle est rare.',
            'category' => 'Cartes',
            'min_players' => 2,
            'max_players' => 5,
            'duration' => 20,
            'cover' => 'images/covers/mille-petales.svg',
        ]);

        Game::create([
            'title' => 'Braises de basalte',
            'description' => 'Trois clans se disputent une île volcanique. Construisez, échangez, trahissez : la partie se joue sur les alliances.',
            'category' => 'Stratégie',
            'min_players' => 3,
            'max_players' => 5,
            'duration' => 120,
            'cover' => 'images/covers/braises-de-basalte.svg',
        ]);

        Game::create([
            'title' => 'Le Toucan bavard',
            'description' => 'Répétez la phrase du toucan en ajoutant un mot à chaque tour. Celui qui se trompe donne une plume.',
            'category' => 'Ambiance',
            'min_players' => 3,
            'max_players' => 8,
            'duration' => 15,
            'cover' => 'images/covers/toucan-bavard.svg',
        ]);
    }
}
