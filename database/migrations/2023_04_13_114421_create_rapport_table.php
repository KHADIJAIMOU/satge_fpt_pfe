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
        $table->string('absenceFirstPrimaire')->nullable();
        $table->string('totalFirstPrimaire')->nullable();
        $table->string('absenceSecondPrimaire')->nullable();
        $table->string('totalSecondPrimaire')->nullable();
        $table->string('absenceThirdPrimaire')->nullable();
        $table->string('totalThirdPrimaire')->nullable();
        $table->string('absenceFourthPrimaire')->nullable();
        $table->string('totalFourthPrimaire')->nullable();
        $table->string('absenceFifthPrimaire')->nullable();
        $table->string('totalFifthPrimaire')->nullable();
        $table->string('absenceSixthPrimaire')->nullable();
        $table->string('totalSixthPrimaire')->nullable();
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
       $table->boolean('renionEffectuerConseilAdministratif')->nullable();
        $table->boolean('renionEffectuerConseilsDepartementaux')->nullable();
        $table->boolean('renionEffectuerConseilsPedagogiqueTa3limi')->nullable();
        $table->boolean('renionEffectuerConseilsPedagogiqueTrbaoui')->nullable();
        $table->boolean('renionEffectuerConseilDeGestion')->nullable();
        $table->boolean('renionEffectuerAutreRenion')->nullable();
        $table->boolean('renionEffectuerRien')->nullable();
          $table->integer('activiteEffectuerIntégrée')->nullable();
        $table->integer('activiteEffectuerParallel')->nullable();
        $table->integer('activiteEffectuerRien')->nullable();
       $table->string('rapportActiviteEffectuer')->nullable();
        $table->string('rapportVisit')->nullable();
        $table->string('rapportAccidentScolaire')->nullable();
        $table->string('different')->nullable();
        $table->boolean('classInterieur')->nullable();
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
