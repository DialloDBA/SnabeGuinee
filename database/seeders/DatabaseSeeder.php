<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::truncate();
        \App\Models\User::factory()->create([
            'name' => 'Administrateur',
            'nom' => 'Administrateur',
            'username' => 'Admin',
            'prenom' => 'admin',
            'username' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make("12345"),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'User',
            'nom' => 'User',
            'username' => 'User',
            'prenom' => 'User',
            'username' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make("12345"),
        ]);
        

        $this->call(InformationSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(DomaineSeeder::class);
        $this->call(ProgrammeSeeder::class);
        $this->call(AnneeSeeder::class);
        $this->call(CatSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(PaysSeeder::class);
        $this->call(TypeBourseSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(FaculteSeeder::class);
        $this->call(NiveauSeeder::class);
    }
}
