<?php

use App\Models\Bourse;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bourse_user', function (Blueprint $table) {
            $table->id();
            $table->enum('actived',['0','1','2','3'])->default(0)->comment("encours,lu,accepter,refuger");
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Bourse::class);
            $table->timestamps();
            $table->softDeletes();
            $table->integer('deleted_by')->nullable();
            $table->integer('action_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bourse_users');
    }
};
