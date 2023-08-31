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
        Schema::create('autre_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('imaggeable_id');
            $table->string('imaggeable_type');

            $table->text('nom')->nullable();
            $table->string('type',100)->nullable();
            $table->string('taille',100)->nullable();
            $table->string('dossier',100)->nullable();
            $table->string('unique',100)->nullable()->unique();
            $table->text('description')->nullable();
            $table->enum('actived',['0','1'])->default(1);
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
        Schema::dropIfExists('autre_images');
    }
};
