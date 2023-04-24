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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('CD_ETAB');
            $table->string('NOM_ETABL');
            $table->string('NOM_ETABA');
            $table->string('la_com');
            $table->string('ll_com');
            $table->string('typeEtab');
            $table->string('LL_CYCLE');
            $table->string('LA_CYCLE');
            $table->string('NetabFr');
            $table->string('CD_GIPE'); 
            $table->string('password');
            $table->string('role')->default('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
