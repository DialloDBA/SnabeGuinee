<?php

namespace Database\Seeders;

use App\Models\Domaine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DomaineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Domaine::truncate();

        $domaines = [
            ['libelle' => 'Informatique', 'unique' => str()->slug('INF'), 'user_id' => 1],
            ['libelle' => 'Génie mécanique', 'unique' => str()->slug('GM'), 'user_id' => 1],
            ['libelle' => 'Sciences économiques et gestion', 'unique' => str()->slug('SEG'), 'user_id' => 1],
            ['libelle' => 'Sciences médicales', 'unique' => str()->slug('SM'), 'user_id' => 1],
            ['libelle' => 'Droit et sciences juridiques', 'unique' => str()->slug('DSJ'), 'user_id' => 1],
            ['libelle' => 'Ingénierie électrique', 'unique' => str()->slug('IE'), 'user_id' => 1],
            ['libelle' => 'Sciences politiques', 'unique' => str()->slug('SP'), 'user_id' => 1],
            ['libelle' => 'Psychologie', 'unique' => str()->slug('PSY'), 'user_id' => 1],
            ['libelle' => 'Architecture', 'unique' => str()->slug('ARCH'), 'user_id' => 1],
            ['libelle' => 'Sciences environnementales', 'unique' => str()->slug('ENV'), 'user_id' => 1],
            ['libelle' => 'Biologie', 'unique' => str()->slug('BIO'), 'user_id' => 1],
            ['libelle' => 'Chimie', 'unique' => str()->slug('CHIM'), 'user_id' => 1],
            ['libelle' => 'Sciences sociales', 'unique' => str()->slug('SS'), 'user_id' => 1],
            ['libelle' => 'Génie civil', 'unique' => str()->slug('GC'), 'user_id' => 1],
            ['libelle' => 'Langues étrangères et linguistique', 'unique' => str()->slug('LEL'), 'user_id' => 1],
        ];
        
        foreach($domaines as $d){
            Domaine::create($d);
        }
    }
}
