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
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->unique();
            $table->string('unique')->unique();
            $table->string('adresse',255)->nullable();
            $table->string('telephone_1')->nullable()->unique();
            $table->string('telephone_2')->nullable()->unique();
            $table->string('email_1')->nullable()->unique();
            $table->string('email_2')->nullable()->unique();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('entreprises');
    }
};
