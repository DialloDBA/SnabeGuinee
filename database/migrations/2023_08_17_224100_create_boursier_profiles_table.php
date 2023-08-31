<?php

use App\Models\User;
use App\Models\Genre;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('boursier_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('unique',100)->unique();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('telephone_1')->nullable()->unique();
            $table->string('telephone_2')->nullable()->unique();
            $table->string('adresse')->nullable();
            $table->string('photo')->nullable();
            // ->default("asset/users/images/avatar/default.png")
            $table->enum('actived',['0','1'])->default(0);
            $table->foreignIdFor(Genre::class);
            $table->foreignIdFor(User::class);
            $table->timestamps();
            $table->softDeletes();
            $table->integer('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boursier_profiles');
    }
};
