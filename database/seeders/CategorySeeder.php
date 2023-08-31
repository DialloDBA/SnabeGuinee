<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::truncate();

        Category::create([
            'libelle_cat'=>'News',
            'slug_cat'=>str()->slug("News"),
            'unique'=>str()->slug("News"),
            'actived'=>'1',
            'user_id'=>1,
        ]);
        Category::create([
            'libelle_cat'=>'Voyage',
            'slug_cat'=>str()->slug("Voyage"),
            'unique'=>str()->slug("Voyage"),
            'actived'=>'1',
            'user_id'=>1,
        ]);
        Category::create([
            'libelle_cat'=>'Formations',
            'slug_cat'=>str()->slug("Formations"),
            'unique'=>str()->slug("Formations"),
            'actived'=>'1',
            'user_id'=>1,
        ]);
    }
}
