<?php

namespace Database\Seeders;

use App\Models\TypeBourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeBourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeBourse::truncate();
        $data = [
            [
                'libelle' => "Bourses d'Etudes",
                'cigle' => 'BE',
                'unique' => 'BE',
                'description' => 'Bourses Sociale.',
                'actived' => '1',
                'user_id' => 1,
            ],
            [
                'libelle' => 'Bourses Sociale',
                'cigle' => 'BS',
                'unique' => 'BS',
                'description' => 'Bourses Sociale.',
                'actived' => '1',
                'user_id' => 1,
            ]
        ];
        foreach ($data as $value) {
            TypeBourse::create($value);
        }
    }
}
