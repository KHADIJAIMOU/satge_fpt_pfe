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
        Schema::create('rapport', function (Blueprint $table) {
            $table->id();
            $table
            ->foreignId('users_id')
            ->constrained()
            ->cascadeOnDelete();
            $table->string('date')->nullable();
            $table->string('typeClass')->nullable();
            $table->string('absenceFirstPrimaire')->nullable();
        $table->integer('totalFirstPrimaire')->nullable();
        $table->integer('absenceSecondPrimaire')->nullable();
        $table->integer('totalSecondPrimaire')->nullable();
        $table->integer('absenceThirdPrimaire')->nullable();
        $table->integer('totalThirdPrimaire')->nullable();
        $table->integer('absenceFourthPrimaire')->nullable();
        $table->integer('totalFourthPrimaire')->nullable();
        $table->integer('absenceFifthPrimaire')->nullable();
        $table->integer('totalFifthPrimaire')->nullable();
        $table->integer('absenceSixthPrimaire')->nullable();
        $table->integer('totalSixthPrimaire')->nullable();
        $table->integer('absenceFirstCollege')->nullable();
        $table->integer('totalFirstCollege')->nullable();
        $table->integer('absenceSecondCollege')->nullable();
        $table->integer('totalSecondCollege')->nullable();
        $table->integer('absenceThirdCollege')->nullable();
        $table->integer('totalThirdCollege')->nullable();
        $table->integer('absenceFirstLycee')->nullable();
        $table->integer('totalFirstLycee')->nullable();
        $table->integer('absenceSecondLycee')->nullable();
        $table->integer('totalSecondLycee')->nullable();
        $table->integer('absenceThirdLycee')->nullable();
        $table->integer('totalThirdLycee')->nullable();
        $table->integer('absenceFirstComptabiliteGeneral')->nullable();
        $table->integer('totalFirstComptabiliteGeneral')->nullable();
        $table->integer('absenceSecondComptabiliteGeneral')->nullable();
        $table->integer('totalSecondComptabiliteGeneral')->nullable();
        $table->integer('absenceFirstManagementCommercial')->nullable();
        $table->integer('totalFirstManagementCommercial')->nullable();
        $table->integer('absenceSecondManagementCommercial')->nullable();
        $table->integer('totalSecondManagementCommercial')->nullable();
        $table->integer('nbEmployee')->nullable();
        $table->integer('nbAbsenceEmployee')->nullable();
        $table->integer('nbRetardEmployee')->nullable();
        $table->integer('nbSeanceProgramme')->nullable();
        $table->integer('nbSeanceEffecuter')->nullable();
        $table->integer('nbSeanceComponser')->nullable();
       $table->string('renionEffectuerConseilAdministratif')->nullable();
        $table->string('renionEffectuerConseilsDepartementaux')->nullable();
        $table->string('renionEffectuerConseilsPedagogiqueTa3limi')->nullable();
        $table->string('renionEffectuerConseilsPedagogiqueTrbaoui')->nullable();
        $table->string('renionEffectuerConseilDeGestion')->nullable();
        $table->string('renionEffectuerAutreRenion')->nullable();
        $table->string('renionEffectuerRien')->nullable();
          $table->string('activiteEffectuerIntégrée')->nullable();
        $table->string('activiteEffectuerParallel')->nullable();
        $table->string('activiteEffectuerRien')->nullable();
       $table->string('rapportActiviteEffectuer')->nullable();
        $table->string('rapportVisit')->nullable();
        $table->string('rapportAccidentScolaire')->nullable();
        $table->string('different')->nullable();
        $table->string('classInterieur')->nullable();
        $table->integer('inscritPetitDejeuner')->nullable();
        $table->integer('presentPetitDejeuner')->nullable();
        $table->integer('inscritDejeuner')->nullable();
        $table->integer('presentDejeuner')->nullable();
        $table->integer('inscritDinner')->nullable();
        $table->integer('presentDinner')->nullable();
       $table->integer('RespectProgrammeNutritional')->nullable();
        $table->integer('quality')->nullable();
        $table->integer('quantity')->nullable();
        $table->integer('presentRevision')->nullable(); 
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
        Schema::dropIfExists('rapport');
    }
};
