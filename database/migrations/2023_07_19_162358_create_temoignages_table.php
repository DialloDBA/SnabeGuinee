<?php

use App\Models\User;
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
        Schema::create('temoignages', function (Blueprint $table) {
            $table->id();
            $table->string('unique')->unique();
            $table->string('nom_temoin',200);
            $table->string('prenom_temoin',255);
            $table->string('profession_temoin',150);
            $table->string('telephone_temoin',150);
            $table->longtext('message_temoin');
            $table->longtext('video_temoin')->nullable();
            $table->string('photo_temoin')->default("temoignages/avatars/default.png");
            
            $table->enum('actived',['0','1'])->default(1);
            $table->integer('priorite')->default(10);
            $table->foreignIdFor(User::class);
            $table->enum('migration',['0','1','2','3'])->default(0);
            $table->enum('online',['0','1'])->default(1)->comment("le statut dans le formulaire du Front");
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
        Schema::dropIfExists('temoignages');
    }
};
