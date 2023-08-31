<?php

namespace Database\Seeders;

use App\Models\Information;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Information::truncate();
        Information::create([
            'entite' => env("APP_NAME"),
            'small_logo' => 'asset/images/snabeguinee-logo.jpg',
            'full_logo' => 'asset/images/snabe-logo.jpg',
            'telephone_1' => '+224 621 93 93 02',
            'telephone_2' => '+224 666 26 20 14',
            'email_1' => 'contact@snabeguinee.com',
            'email_2' => 'info@snabeguinee.com',
            'adresse_1' => 'Conakry,Commune de Ratoma, Republique de Guinée',
            'adresse_2' => 'Conakry,Commune de Ratoma, Republique de Guinée',
            'small_description' => " a commencée ses opérations en 2018. Nous sommes une société de marketing Web, d'applications et de marketing numérique basée dans le monde entier. Notre domaine principal 
            est la conception Web, le développement d'applications, le marketing numérique, la conception de produits et les services cloud. La satisfaction client et le taux de répétabilité client le plus élevé font de nous l'un des pionniers dans le domaine. Alors qu'est-ce que vous attendez? Laissez-nous discuter de vos idées et de notre innovation en détail, car répondre à vos besoins et les transformer en un produit final est notre objectif principal.",
            'description' => null,
            'fax' => null,
            'facebook' => "https://www.facebook.com/CabinetDuPresident/?ref=page_internal",
            'twitter' => "https://twitter.com/SNABE_CONAKRY?t=8NPkiALG2z9qVz-rgqszzg&s=09",
            'instragram' => null,
            'linkedin' => "https://gn.linkedin.com/company/snabe-service-national-des-bourses-ext%C3%A9rieures-cabinet-du-pr%C3%A9sident",
            'youtube' => "https://www.youtube.com/channel/UCIg5fVe2ihm4JSVZuNGMJFA",
            'skype' => null,
            'tiktok' => null,
            'googleplus' => null,
            'user_id' => 1,
            'solde_sms' => 0,
            'sms_envoye' => 0,
            'sms_total' => 0,
            'pau_sms' => 500,
            'date_expiration_sms' =>(now()),
            'actived' => '1',
            'deleted_by' => null,
        ]);
    }
}
