<?php

namespace Database\Seeders;

use App\Models\Pays;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pays = [
            [
                'unique' => 1,
                'code' => 100,
                'alpha2' => 'FR',
                'alpha3' => 'FRA',
                'langCS' => 'France',
                'langDE' => 'Frankreich',
                'langEN' => 'France',
                'langES' => 'Francia',
                'langFR' => 'France',
                'langIT' => 'Francia',
                'langNL' => 'Frankrijk',
                'actived' => '1',
                'user_id' => 1,
            ],
            [
                'unique' => 2,
                'code' => 212,
                'alpha2' => 'MA',
                'alpha3' => 'MAR',
                'langCS' => 'Maroc',
                'langDE' => 'Marokko',
                'langEN' => 'Morocco',
                'langES' => 'Marruecos',
                'langFR' => 'Maroc',
                'langIT' => 'Marocco',
                'langNL' => 'Marokko',
                'actived' => '1',
                'user_id' => 1,
            ],
            [
                'unique' => 3,
                'code' => 213,
                'alpha2' => 'DZ',
                'alpha3' => 'DZA',
                'langCS' => 'Algérie',
                'langDE' => 'Algerien',
                'langEN' => 'Algeria',
                'langES' => 'Argelia',
                'langFR' => 'Algérie',
                'langIT' => 'Algeria',
                'langNL' => 'Algerije',
                'actived' => '1',
                'user_id' => 1,
            ],
            [
                'unique' => 4,
                'code' => 216,
                'alpha2' => 'TN',
                'alpha3' => 'TUN',
                'langCS' => 'Tunisie',
                'langDE' => 'Tunesien',
                'langEN' => 'Tunisia',
                'langES' => 'Túnez',
                'langFR' => 'Tunisie',
                'langIT' => 'Tunisia',
                'langNL' => 'Tunesië',
                'actived' => '1',
                'user_id' => 1,
            ],
            [
                'unique' => 5,
                'code' => 60,
                'alpha2' => 'MY',
                'alpha3' => 'MYS',
                'langCS' => 'Malaisie',
                'langDE' => 'Malaysia',
                'langEN' => 'Malaysia',
                'langES' => 'Malasia',
                'langFR' => 'Malaisie',
                'langIT' => 'Malesia',
                'langNL' => 'Maleisië',
                'actived' => '1',
                'user_id' => 1,
            ],
            [
                'unique' => 6,
                'code' => 7,
                'alpha2' => 'RU',
                'alpha3' => 'RUS',
                'langCS' => 'Russie',
                'langDE' => 'Russland',
                'langEN' => 'Russia',
                'langES' => 'Rusia',
                'langFR' => 'Russie',
                'langIT' => 'Russia',
                'langNL' => 'Rusland',
                'actived' => '1',
                'user_id' => 1,
            ],
            [
                'unique' => 7,
                'code' => 81,
                'alpha2' => 'JP',
                'alpha3' => 'JPN',
                'langCS' => 'Japon',
                'langDE' => 'Japan',
                'langEN' => 'Japan',
                'langES' => 'Japón',
                'langFR' => 'Japon',
                'langIT' => 'Giappone',
                'langNL' => 'Japan',
                'actived' => '1',
                'user_id' => 1,
            ],
            [
                'unique' => 9,
                'code' => 86,
                'alpha2' => 'CN',
                'alpha3' => 'CHN',
                'langCS' => 'Chine',
                'langDE' => 'China',
                'langEN' => 'China',
                'langES' => 'China',
                'langFR' => 'Chine',
                'langIT' => 'Cina',
                'langNL' => 'China',
                'actived' => '1',
                'user_id' => 1,
            ],
        ];

        Pays::truncate();
        foreach ($pays as $paysData) {
            Pays::create($paysData);
        }
    }
}
