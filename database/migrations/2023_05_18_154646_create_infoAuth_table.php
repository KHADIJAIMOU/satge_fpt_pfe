<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateinfoAuthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infoAuth', function (Blueprint $table) {
            $table->id();
            $table
            ->foreignId('users_id')
            ->constrained()
            ->cascadeOnDelete();
            $table->string('adressIp')->nullable(); 
            $table->string('mac_address')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infoAuth');
    }
}
