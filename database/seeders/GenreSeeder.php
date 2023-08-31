<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::truncate();

        Genre::create([
            'libelle'=>"Masculin",
            'unique'=>str()->slug("Masculin"),
            'description'=>"Genre Masculin",
            'user_id'=>1
        ]);
        Genre::create([
            'libelle'=>"Féminin",
            'unique'=>str()->slug("Féminin"),
            'description'=>"Genre Féminin",
            'user_id'=>1
        ]);
    }
}
