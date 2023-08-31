<?php

namespace Database\Seeders;

use App\Models\Niveau;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Niveau::truncate();
        $niveaux = [
            ['libelle' => 'Bac+1','unique'=>Str::slug("Bac+1"),"description"=>"Bac+1","user_id"=>1],
            ['libelle' => 'Bac+2','unique'=>Str::slug("Bac+2"),"description"=>"Bac+2","user_id"=>1],
            ['libelle' => 'Bac+3','unique'=>Str::slug("Bac+3"),"description"=>"Bac+3","user_id"=>1],
            ['libelle' => 'Bac+4','unique'=>Str::slug("Bac+4"),"description"=>"Bac+4","user_id"=>1],
            ['libelle' => 'Bac+7','unique'=>Str::slug("Bac+7"),"description"=>"Bac+7","user_id"=>1],
            ['libelle' => 'Licence','unique'=>Str::slug("Licence"),"description"=>"Licence","user_id"=>1],
            ['libelle' => 'Maitrise','unique'=>Str::slug("Maitrise"),"description"=>"Maitrise","user_id"=>1],
            ['libelle' => 'Master 1','unique'=>Str::slug("Master 1"),"description"=>"Master 1","user_id"=>1],
            ['libelle' => 'Master 2','unique'=>Str::slug("Master 2"),"description"=>"Master 2","user_id"=>1],
            ['libelle' => 'Doctorat','unique'=>Str::slug("Doctorat"),"description"=>"Doctorat","user_id"=>1],
            ['libelle' => 'BTS','unique'=>Str::slug("BTS"),"description"=>"BTS","user_id"=>1],
        ];

        foreach($niveaux as $n){
            Niveau::create($n);
        }
    }
}
