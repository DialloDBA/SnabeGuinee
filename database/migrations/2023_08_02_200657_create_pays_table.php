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
        Schema::create('pays', function (Blueprint $table) {
            $table->id();
            $table->integer('unique')->unique();
            $table->integer('code')->unique();
            $table->string('alpha2',50);
            $table->string('alpha3',50);
            $table->string('langCS',50);
            $table->string('langDE',50);
            $table->string('langEN',50);
            $table->string('langES',50);
            $table->string('langFR',50);
            $table->string('langIT',50);
            $table->string('langNL',50);
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
        Schema::dropIfExists('pays');
    }
};
