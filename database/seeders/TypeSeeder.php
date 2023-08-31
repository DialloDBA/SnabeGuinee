<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::truncate();
        $data = [
            [
                'libelle' => 'Contrat à durée indéterminée (CDI)',
                'cigle' => 'CDI',
                'unique' => 'CDI',
                'description' => 'Contrat de travail sans date de fin spécifiée.',
                'actived' => '1',
                'user_id' => 1,
            ],
            [
                'libelle' => 'Contrat à durée déterminée (CDD)',
                'cigle' => 'CDD',
                'unique' => 'CDD',
                'description' => 'Contrat de travail avec une date de fin spécifiée.',
                'actived' => '1',
                'user_id' => 1,
            ],
            [
                'libelle' => 'Contrat de Stage',
                'cigle' => 'CS',
                'unique' => str()->slug('Contrat de Stage'),
                'description' => 'Contrat de Stage avec une date de fin spécifiée.',
                'actived' => '1',
                'user_id' => 1,
            ],
            [
                'libelle' => 'Contrat à temps partiel',
                'cigle' => 'TP',
                'unique' => 'Temps partiel',
                'description' => 'Contrat de travail où l\'employé travaille moins d\'heures par semaine que le nombre d\'heures normalement prévu pour un emploi à temps plein.',
                'actived' => '1',
                'user_id' => 1,
            ],
            [
                'libelle' => 'Contrat Permanent',
                'cigle' => 'CP',
                'unique' => str()->slug('Contrat Permanent'),
                'description' => 'Contrat Permanent.',
                'actived' => '1',
                'user_id' => 1,
            ],
            // Ajoutez d'autres enregistrements pour les autres types de contrats
        ];
        foreach ($data as $item) {
            Type::create($item);
        }
    }
}
