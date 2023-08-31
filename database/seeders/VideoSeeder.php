<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Video::truncate();

        Video::create([
            'titre_video'=>"Mr SNABE vous présente les opportunités de bourses d'études exterieures.",
            'unique'=>str()->slug("Mr SNABE vous présente les opportunités de bourses d'études exterieures."),
            'image_video'=>'image.jpg',
            'url_video'=>'https://youtu.be/0TSwkSsEoQs',
            'source_video'=>2,
            'category_id'=>1,
            'user_id'=>1
        ]);
        Video::create([
            'titre_video'=>"Directeur Général du Service National des Bourses Exterieures, Monsieur Mohamed Bamba CAMARA.",
            'unique'=>str()->slug("Directeur Général du Service National des Bourses Exterieures, Monsieur Mohamed Bamba CAMARA."),
            'image_video'=>'image.jpg',
            'url_video'=>'https://youtu.be/GXDzkAGf54w',
            'source_video'=>2,
            'category_id'=>1,
            'user_id'=>1
        ]);
        Video::create([
            'titre_video'=>"Signature d'un accord de partenariat entre le SNABE et WINNING CONSORTIUM",
            'unique'=>str()->slug("Signature d'un accord de partenariat entre le SNABE et WINNING CONSORTIUM."),
            'image_video'=>'image.jpg',
            'url_video'=>'https://youtu.be/pjPbKlAGuxA',
            'source_video'=>2,
            'category_id'=>1,
            'user_id'=>1
        ]);
        Video::create([
            'titre_video'=>'"SNABE" Départ des lauréats pour les études universitaires au Maroc.',
            'unique'=>str()->slug('SNABE" Départ des lauréats pour les études universitaires au Maroc.'),
            'image_video'=>'image.jpg',
            'url_video'=>'https://youtu.be/ZixonLCS27U',
            'source_video'=>2,
            'category_id'=>1,
            'user_id'=>1
        ]);
    }
}
