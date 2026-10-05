<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::create(['name' => 'Amina Benali', 'email' => 'amina.benali@exemple.be']);
        Member::create(['name' => 'Lucas Peeters', 'email' => 'lucas.peeters@exemple.be']);
        Member::create(['name' => 'Mei Lin Chen', 'email' => 'meilin.chen@exemple.be']);
        Member::create(['name' => 'Kofi Mensah', 'email' => 'kofi.mensah@exemple.be']);
        Member::create(['name' => 'Sofia Rossi', 'email' => 'sofia.rossi@exemple.be']);
        Member::create(['name' => 'Thomas Dubois', 'email' => 'thomas.dubois@exemple.be']);
        Member::create(['name' => 'Ilona Kowalska', 'email' => 'ilona.kowalska@exemple.be']);
        Member::create(['name' => 'Yasmine El Idrissi', 'email' => 'yasmine.elidrissi@exemple.be']);
    }
}
