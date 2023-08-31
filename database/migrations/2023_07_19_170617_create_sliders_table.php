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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title_sm',250)->unique();
            $table->string('unique',250)->unique();
            $table->string('title_lg',250)->nullable()->unique();
            $table->string('btn',255)->nullable();
            $table->string('link',255)->nullable();
            $table->string('image',255);
            $table->string('folder',255);

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
     * Reverse the migrations
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
