<?php

namespace Database\Seeders;

use App\Models\Annee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnneeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Annee::truncate();
        Annee::create([
            'libelle'=>"2023-2024",
            'unique'=>"2023-2024",
            'debut'=>"07-10-2023",
            'fin'=>"07-10-2024",
            'user_id'=>1,
        ]);
        Annee::create([
            'libelle'=>"2024-2025",
            'unique'=>"2024-2025",
            'debut'=>"07-10-2024",
            'fin'=>"07-10-2025",
            'user_id'=>1,
        ]);
        Annee::create([
            'libelle'=>"2026-2027",
            'unique'=>"2026-2027",
            'debut'=>"07-10-2026",
            'fin'=>"07-10-2027",
            'user_id'=>1,
        ]);
        
    }
}
