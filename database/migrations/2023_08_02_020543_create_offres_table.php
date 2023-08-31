<?php

use App\Models\Cat;
use App\Models\Type;
use App\Models\User;
use App\Models\Entreprise;
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
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->string("titre_offre",255);
            $table->string("unique",200)->nullable()->unique();
            $table->string("reference_offre",200)->unique();
            $table->string("date_limite_offre",100)->nullable();
            $table->string("date_fonction_offre",100)->nullable();
            $table->string("dossier_offre",200)->nullable()->unique();
            $table->longtext("description_role")->nullable();
            $table->longtext("description_profile")->nullable();
            $table->longtext("info_complementaires")->nullable();
            $table->integer('priorite')->default(10);
            
            $table->enum('actived',['0','1'])->default(1);
            $table->foreignIdFor(Entreprise::class);
            $table->foreignIdFor(Type::class);
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
        Schema::dropIfExists('offres');
    }
};
