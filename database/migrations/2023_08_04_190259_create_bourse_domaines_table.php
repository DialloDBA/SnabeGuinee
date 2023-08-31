<?php

use App\Models\Bourse;
use App\Models\Domaine;
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
        // je voulais le faire les programmes d'etudes
        // Schema::create('bourse_domaine', function (Blueprint $table) {
        //     $table->id();
        //     $table->enum('actived',['0','1'])->default(1);
        //     $table->foreignIdFor(Bourse::class);
        //     $table->foreignIdFor(Domaine::class);
        //     $table->foreignIdFor(User::class);
        //     $table->timestamps();
        //     $table->softDeletes();
        //     $table->integer('deleted_by')->nullable();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bourse_domaines');
    }
};
