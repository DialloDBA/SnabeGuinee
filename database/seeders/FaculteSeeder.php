<?php

namespace Database\Seeders;

use App\Models\Faculte;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FaculteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faculte::truncate();
        $facultes = [
            // ['libelle' => 'Arts, Lettres, Langues','unique'=>str()->slug('Arts, Lettres, Langues'),'description'=>'Arts, Lettres, Langues','user_id'=>1],
            // ['libelle' => 'Droit, Economie, Gestion','unique'=>str()->slug('Droit, Economie, Gestion'),'description'=>'Droit, Economie, Gestion','user_id'=>1],
            // ['libelle' => 'Droit, Economie, Gestion','unique'=>str()->slug('Droit, Economie, Gestion'),'description'=>'Droit, Economie, Gestion','user_id'=>1],
            // ['libelle' => 'Sciences Humaines et Sociales','unique'=>str()->slug('Sciences Humaines et Sociales'),'description'=>'Sciences Humaines et Sociales','user_id'=>1],
            // ['libelle' => 'Sciences, Technologies, Santé','unique'=>str()->slug('Sciences, Technologies, Santé'),'description'=>'Sciences, Technologies, Santé','user_id'=>1],
            
            ['libelle' => 'Arts, Lettres, Langues', 'unique' => Str::slug('Arts, Lettres, Langues'), 'description' => 'Arts, Lettres, Langues', 'user_id' => 1],
            ['libelle' => 'Droit, Economie, Gestion', 'unique' => Str::slug('Droit, Economie, Gestion'), 'description' => 'Droit, Economie, Gestion', 'user_id' => 1],
            ['libelle' => 'Sciences Humaines et Sociales', 'unique' => Str::slug('Sciences Humaines et Sociales'), 'description' => 'Sciences Humaines et Sociales', 'user_id' => 1],
            ['libelle' => 'Sciences Juridiques et Politiques', 'unique' => Str::slug('Sciences Juridiques et Politiques'), 'description' => 'Sciences Juridiques et Politiques', 'user_id' => 1],
            ['libelle' => 'Faculté de Médecine', 'unique' => Str::slug('Faculté de Médecine'), 'description' => 'Faculté de Médecine', 'user_id' => 1],
            ['libelle' => 'Faculté des Sciences de la Santé', 'unique' => Str::slug('Faculté des Sciences de la Santé'), 'description' => 'Faculté des Sciences de la Santé', 'user_id' => 1],
            ['libelle' => 'Faculté de Génie, Architecture et Sciences de la Terre', 'unique' => Str::slug('Faculté de Génie, Architecture et Sciences de la Terre'), 'description' => 'Faculté de Génie, Architecture et Sciences de la Terre', 'user_id' => 1],
            ['libelle' => 'Faculté des Sciences Agronomiques', 'unique' => Str::slug('Faculté des Sciences Agronomiques'), 'description' => 'Faculté des Sciences Agronomiques', 'user_id' => 1],
            ['libelle' => 'Faculté des Sciences de l\'Éducation', 'unique' => Str::slug('Faculté des Sciences de l\'Éducation'), 'description' => 'Faculté des Sciences de l\'Éducation', 'user_id' => 1],
            ['libelle' => 'Faculté des Sciences Islamiques', 'unique' => Str::slug('Faculté des Sciences Islamiques'), 'description' => 'Faculté des Sciences Islamiques', 'user_id' => 1],
            ['libelle' => 'Faculté des Sciences et Techniques de l\'Information et de la Communication', 'unique' => Str::slug('Faculté des Sciences et Techniques de l\'Information et de la Communication'), 'description' => 'Faculté des Sciences et Techniques de l\'Information et de la Communication', 'user_id' => 1],
        ];

        foreach($facultes as $f){
            Faculte::create($f);
        }
        
    }
}
