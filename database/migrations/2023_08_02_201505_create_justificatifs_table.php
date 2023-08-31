<?php

use App\Models\Bourse;
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
        Schema::create('justificatifs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nom',100)->nullable();
            $table->string('type',100)->nullable();
            $table->string('taille',100)->nullable();
            $table->string('dossier',100)->nullable();
            $table->string('unique',100)->nullable()->unique();
            $table->text('description')->nullable();
            $table->enum('actived',['0','1'])->default(1);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Bourse::class);
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
        Schema::dropIfExists('justificatifs');
    }
};
