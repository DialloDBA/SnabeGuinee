<?php

namespace Database\Seeders;

use App\Models\Entreprise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntrepriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Entreprise::truncate();
        Entreprise::create([
            'nom'=>"Snabe Guinée",
            'unique'=>str()->slug("Snabe Guinée"),
            'adresse'=>"Conakry,Commune de Ratoma, Republique de Guinée",
            'telephone_1'=>'+224623525202',
            'telephone_2'=>'+224623525203',
            'email_1'=>'snabeguinee@gmail.com',
            'email_2'=>'osnabeguinee@gmail.com',
            'user_id'=>1,
        ]);
    }
}
