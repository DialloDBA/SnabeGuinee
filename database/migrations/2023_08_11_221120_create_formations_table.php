<?php

use App\Models\Faculte;
use App\Models\Niveau;
use App\Models\Pays;
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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Faculte::class);
            $table->string('filiere')->nullable();
            $table->string('option')->nullable();
            $table->foreignIdFor(Niveau::class);
            $table->string('universite');
            $table->string('region');
            $table->foreignIdFor(Pays::class);

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
        Schema::dropIfExists('formations');
    }
};
