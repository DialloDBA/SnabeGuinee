<?php

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
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('nom',255);
            $table->string('unique',250)->unique();
            $table->string('email',255);
            $table->string('telephone',255);
            $table->string('read_at')->nullable();
            $table->text('sujet');
            $table->longtext('message');
            $table->enum("actived",['0','1'])->default(0); // 
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
        Schema::dropIfExists('contact_messages');
    }
};
