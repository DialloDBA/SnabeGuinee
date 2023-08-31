<?php

namespace Database\Seeders;

use App\Models\Cat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cats = [
            ['libelle_cat' => 'Informatique', 'unique' => str()->slug('INF'), 'user_id' => 1],
            ['libelle_cat' => 'Génie mécanique', 'unique' => str()->slug('GM'), 'user_id' => 1],
            ['libelle_cat' => 'Sciences économiques et gestion', 'unique' => str()->slug('SEG'), 'user_id' => 1],
            ['libelle_cat' => 'Sciences médicales', 'unique' => str()->slug('SM'), 'user_id' => 1],
            ['libelle_cat' => 'Droit et sciences juridiques', 'unique' => str()->slug('DSJ'), 'user_id' => 1],
            ['libelle_cat' => 'Ingénierie électrique', 'unique' => str()->slug('IE'), 'user_id' => 1],
            ['libelle_cat' => 'Sciences politiques', 'unique' => str()->slug('SP'), 'user_id' => 1],
            ['libelle_cat' => 'Psychologie', 'unique' => str()->slug('PSY'), 'user_id' => 1],
            ['libelle_cat' => 'Architecture', 'unique' => str()->slug('ARCH'), 'user_id' => 1],
            ['libelle_cat' => 'Sciences environnementales', 'unique' => str()->slug('ENV'), 'user_id' => 1],
            ['libelle_cat' => 'Biologie', 'unique' => str()->slug('BIO'), 'user_id' => 1],
            ['libelle_cat' => 'Chimie', 'unique' => str()->slug('CHIM'), 'user_id' => 1],
            ['libelle_cat' => 'Sciences sociales', 'unique' => str()->slug('SS'), 'user_id' => 1],
            ['libelle_cat' => 'Génie civil', 'unique' => str()->slug('GC'), 'user_id' => 1],
            ['libelle_cat' => 'Langues étrangères et linguistique', 'unique' => str()->slug('LEL'), 'user_id' => 1],
        ];
        Cat::truncate();
        foreach($cats as $c){
            Cat::create($c);
        }
    }
}
