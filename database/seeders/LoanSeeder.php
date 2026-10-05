<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Loan;
use App\Models\Member;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Les dates partent d'aujourd'hui : un prêt dure trois semaines.
     */
    public function run(): void
    {
        // Rendus
        $this->lend('Les Comptoirs de Safran', 'amina.benali@exemple.be', 60, 45);
        $this->lend('Le Jardin hexagonal', 'lucas.peeters@exemple.be', 50, 38);
        $this->lend('Pique et Plume', 'meilin.chen@exemple.be', 40, 30);
        $this->lend('Marée d\'étoiles', 'kofi.mensah@exemple.be', 35, 20);
        $this->lend('Code Corail', 'sofia.rossi@exemple.be', 28, 15);
        $this->lend('Les Comptoirs de Safran', 'thomas.dubois@exemple.be', 20, 8);

        // En retard : pas rendus, la date de retour est dépassée
        $this->lend('Braises de basalte', 'ilona.kowalska@exemple.be', 40);
        $this->lend('Le Moulin des quatre vents', 'yasmine.elidrissi@exemple.be', 30);
        $this->lend('Grand Tapage au marché', 'lucas.peeters@exemple.be', 26);
        $this->lend('L\'Atlas du Nord', 'amina.benali@exemple.be', 23);

        // En cours : pas rendus, encore dans les temps
        $this->lend('Marée d\'étoiles', 'sofia.rossi@exemple.be', 15);
        $this->lend('Les Sept Lanternes', 'kofi.mensah@exemple.be', 10);
        $this->lend('Mille Pétales', 'meilin.chen@exemple.be', 6);
        $this->lend('Code Corail', 'thomas.dubois@exemple.be', 3);
        $this->lend('Le Toucan bavard', 'yasmine.elidrissi@exemple.be', 1);
    }

    /**
     * Enregistre un prêt de trois semaines, commencé il y a $daysAgo jours.
     */
    private function lend(string $title, string $email, int $daysAgo, ?int $returnedDaysAgo = null): void
    {
        $borrowedAt = today()->subDays($daysAgo);

        Loan::create([
            'game_id' => Game::firstWhere('title', $title)->id,
            'member_id' => Member::firstWhere('email', $email)->id,
            'borrowed_at' => $borrowedAt,
            'due_at' => $borrowedAt->copy()->addDays(21),
            'returned_at' => $returnedDaysAgo === null ? null : today()->subDays($returnedDaysAgo),
        ]);
    }
}
