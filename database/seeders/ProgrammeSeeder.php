<?php

namespace Database\Seeders;

use App\Models\Programme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgrammeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Programme::truncate();
        $programmes = [
            ['titre' => 'Licence', 'unique' => 'LIC', 'description' => 'Description du programme Licence...', 'user_id' => 1],
            ['titre' => 'Master', 'unique' => 'MAS', 'description' => 'Description du programme Master...', 'user_id' => 1],
            ['titre' => 'Doctorat', 'unique' => 'DOC', 'description' => 'Description du programme Doctorat...', 'user_id' => 1],
            ['titre' => 'Post Doctorat', 'unique' => 'PODOC', 'description' => 'Description du programme Doctorat...', 'user_id' => 1],
            ['titre' => 'Recherche', 'unique' => 'RECH', 'description' => 'Description du programme Doctorat...', 'user_id' => 1],
        ];
        foreach($programmes as $p){
            Programme::create($p);
        }
    }
}
