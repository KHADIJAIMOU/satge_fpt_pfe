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
            $table->string('absenceFirstPrimaire')->nullable()->default(0);
        $table->integer('totalFirstPrimaire')->nullable()->default(0);
        $table->integer('absenceSecondPrimaire')->nullable()->default(0);
        $table->integer('totalSecondPrimaire')->nullable()->default(0);
        $table->integer('absenceThirdPrimaire')->nullable()->default(0);
        $table->integer('totalThirdPrimaire')->nullable()->default(0);
        $table->integer('absenceFourthPrimaire')->nullable()->default(0);
        $table->integer('totalFourthPrimaire')->nullable()->default(0);
        $table->integer('absenceFifthPrimaire')->nullable()->default(0);
        $table->integer('totalFifthPrimaire')->nullable()->default(0);
        $table->integer('absenceSixthPrimaire')->nullable()->default(0);
        $table->integer('totalSixthPrimaire')->nullable()->default(0);
        $table->integer('absenceFirstCollege')->nullable()->default(0);
        $table->integer('totalFirstCollege')->nullable()->default(0);
        $table->integer('absenceSecondCollege')->nullable()->default(0);
        $table->integer('totalSecondCollege')->nullable()->default(0);
        $table->integer('absenceThirdCollege')->nullable()->default(0);
        $table->integer('totalThirdCollege')->nullable()->default(0);
        $table->integer('absenceFirstLycee')->nullable()->default(0);
        $table->integer('totalFirstLycee')->nullable()->default(0);
        $table->integer('absenceSecondLycee')->nullable()->default(0);
        $table->integer('totalSecondLycee')->nullable()->default(0);
        $table->integer('absenceThirdLycee')->nullable()->default(0);
        $table->integer('totalThirdLycee')->nullable()->default(0);
        $table->integer('absenceFirstComptabiliteGeneral')->nullable()->default(0);
        $table->integer('totalFirstComptabiliteGeneral')->nullable()->default(0);
        $table->integer('absenceSecondComptabiliteGeneral')->nullable()->default(0);
        $table->integer('totalSecondComptabiliteGeneral')->nullable()->default(0);
        $table->integer('absenceFirstManagementCommercial')->nullable()->default(0);
        $table->integer('totalFirstManagementCommercial')->nullable()->default(0);
        $table->integer('absenceSecondManagementCommercial')->nullable()->default(0);
        $table->integer('totalSecondManagementCommercial')->nullable()->default(0);
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
