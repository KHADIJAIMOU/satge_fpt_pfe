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
        Schema::create('reclamation', function (Blueprint $table) {
            $table->id();
            $table
            ->foreignId('users_id')
            ->constrained()
            ->cascadeOnDelete();
            $table->string('first_name')->nullable(); 
            $table->string('last_name')->nullable(); 
            $table->string('CNI')->nullable(); 
            $table->string('ll_com')->nullable(); 
            $table->string('NOM_ETABL')->nullable(); 
            $table->string('phone')->nullable(); 
            $table->string('content')->nullable(); 
            $table->string('response')->nullable(); 
            $table->integer('status');
            $table->string('adressIp')->nullable(); 
            $table->string('mac_address')->nullable(); 
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclamation');
    }
};
