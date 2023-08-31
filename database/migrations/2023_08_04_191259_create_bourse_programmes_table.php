<?php

use App\Models\User;
use App\Models\Bourse;
use App\Models\Programme;
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
        Schema::create('bourse_programme', function (Blueprint $table) {
            $table->id();
            $table->enum('actived',['0','1'])->default(1);
            $table->foreignIdFor(Bourse::class);
            $table->foreignIdFor(Programme::class);
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
        Schema::dropIfExists('bourse_programmes');
    }
};
