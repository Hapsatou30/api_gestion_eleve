<?php

namespace Database\Seeders;

use App\Models\UniteEnseignement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniteEnseignementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UniteEnseignement::factory(4)->create();
    }
}
