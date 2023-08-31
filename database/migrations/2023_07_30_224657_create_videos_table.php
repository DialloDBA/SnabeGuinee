<?php

use App\Models\User;
use App\Models\Category;
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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string("titre_video",255);
            $table->string("unique",250)->unique();
            $table->string("image_video",255);
            $table->text("url_video");
            $table->enum('actived',['0','1'])->default(1);
            $table->integer("source_video");
            $table->integer('views_article')->default(0);
            $table->integer('likes_article')->default(0);
            $table->integer('priorite')->default(10);

            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Category::class)->nullable();
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
        Schema::dropIfExists('videos');
    }
};
