<?php

use App\Models\Pays;
use App\Models\User;
use App\Models\Annee;
use App\Models\Justificatif;
use App\Models\TypeBourse;
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
        Schema::create('bourses', function (Blueprint $table) {
            $table->id();
            $table->string('titre_bourse',255);
            $table->string('unique')->unique();
            $table->string("date_limite_bourse",100)->nullable();
            $table->text('eligibilite')->nullable();
            $table->longtext('description_bourse')->nullable();
            $table->text('piece_justificative',255)->nullable();
            $table->text("image_min_bourse")->nullable();
            $table->text("image_max_bourse")->nullable();
            
            $table->integer('priorite')->default(10);
            $table->enum('actived',['0','1','2'])->default(1);//2 annuler
            // $table->enum('type_bourse',['1','2'])->default(1); // 1 bourse detude ; 2 bourse sociale
            // $table->foreignIdFor(Justificatif::class); // Pieces justificatives
            $table->foreignIdFor(TypeBourse::class);
            $table->foreignIdFor(Annee::class);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Pays::class);
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
        Schema::dropIfExists('bourses');
    }
};
