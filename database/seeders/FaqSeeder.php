<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::truncate();

        Faq::create([
            'question'=>'comment s\'inscrire au SNABE ?',
            'reponse'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, porro.",
            'unique'=>str()->slug('comment s\'inscrire au SNABE ?'),
            'user_id'=>1,
        ]);
        Faq::create([
            'question'=>'1 comment s\'inscrire au SNABE ?',
            'reponse'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, porro.",
            'unique'=>str()->slug('1 comment s\'inscrire au SNABE ?'),
            'user_id'=>1,
        ]);
        Faq::create([
            'question'=>'2 comment s\'inscrire au SNABE ?',
            'reponse'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, porro.",
            'unique'=>str()->slug('2 comment s\'inscrire au SNABE ?'),
            'user_id'=>1,
        ]);
        Faq::create([
            'question'=>'3 comment s\'inscrire au SNABE ?',
            'reponse'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, porro.",
            'unique'=>str()->slug('3 comment s\'inscrire au SNABE ?'),
            'user_id'=>1,
        ]);
        Faq::create([
            'question'=>'4 comment s\'inscrire au SNABE ?',
            'reponse'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, porro.",
            'unique'=>str()->slug('4 comment s\'inscrire au SNABE ?'),
            'user_id'=>1,
        ]);
        Faq::create([
            'question'=>'5 comment s\'inscrire au SNABE ?',
            'reponse'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, porro.",
            'unique'=>str()->slug('5 comment s\'inscrire au SNABE ?'),
            'user_id'=>1,
        ]);
    }
}
