<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('boursiers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('telephone_1')->nullable()->unique();
            $table->string('telephone_2')->nullable()->unique();
            $table->string("date_naissance")->nullable();
            $table->string("lieu_naissance")->nullable();
            $table->string('adresse')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boursiers');
    }
};
