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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string("entite")->default(ucfirst(str()->lower(env("APP_NAME"))));
            $table->string("small_logo")->default('asset/images/assia-logo.jpg');
            $table->string("full_logo")->default('asset/images/assia-logo.jpg');
            $table->string("telephone_1")->unique();
            $table->string("telephone_2")->unique()->nullable();
            $table->string("email_1")->unique();
            $table->string("email_2")->unique()->nullable();
            $table->string("adresse_1")->unique();
            $table->string("adresse_2")->unique()->nullable();
            $table->text("small_description")->nullable();
            $table->longtext("description")->nullable();
            $table->string("fax")->unique()->nullable();
            $table->string("facebook")->unique()->nullable();
            $table->string("twitter")->unique()->nullable();
            $table->string("instragram")->unique()->nullable();
            $table->string("linkedin")->unique()->nullable();
            $table->string("youtube")->unique()->nullable();
            $table->string("tiktok")->unique()->nullable();
            $table->string("skype")->unique()->nullable();
            $table->string("googleplus")->unique()->nullable();
            $table->integer("solde_sms")->default(0);
            $table->integer("sms_envoye")->default(0);
            $table->integer("sms_total")->default(0);
            $table->float("pau_sms",8,2)->nullable();
            $table->string("date_expiration_sms")->nullable();
            $table->enum('actived',['0','1'])->default(1);
            
            $table->string("icone_72")->default('asset/images/assia-logo-72.jpg');
            $table->string("icone_96")->default('asset/images/assia-logo-92.jpg');
            $table->string("icone_128")->default('asset/images/assia-logo-128.jpg');
            $table->string("icone_144")->default('asset/images/assia-logo-144.jpg');
            $table->string("icone_152")->default('asset/images/assia-logo-152.jpg');
            $table->string("icone_192")->default('asset/images/assia-logo-192.jpg');
            $table->string("icone_384")->default('asset/images/assia-logo-384.jpg');
            $table->string("icone_512")->default('asset/images/assia-logo-512.jpg');

            $table->foreignidFor(User::class);
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
        Schema::dropIfExists('information');
    }
};
