<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;
    protected $table = 'rapport';
    protected $primaryKey = 'id';

    protected $fillable = [
    'users_id',
        'date',
        'typeClass',
        'absenceFirstPrimaire',
        'totalFirstPrimaire',
        'absenceSecondPrimaire',
        'totalSecondPrimaire',
        'absenceThirdPrimaire',
        'totalThirdPrimaire',
        'absenceFourthPrimaire',
        'totalFourthPrimaire',
        'absenceFifthPrimaire',
        'totalFifthPrimaire',
        'absenceSixthPrimaire',
        'totalSixthPrimaire',
        'absenceFirstCollege',
        'totalFirstCollege',
        'absenceSecondCollege',
        'totalSecondCollege',
        'absenceThirdCollege',
        'totalThirdCollege',
        'absenceFirstLycee',
        'totalFirstLycee',
        'absenceSecondLycee',
        'totalSecondLycee',
        'absenceThirdLycee',
        'totalThirdLycee',
        'absenceFirstComptabiliteGeneral',
        'totalFirstComptabiliteGeneral',
        'absenceSecondComptabiliteGeneral',
        'totalSecondComptabiliteGeneral',
        'absenceFirstManagementCommercial',
        'totalFirstManagementCommercial',
        'absenceSecondManagementCommercial',
        'totalSecondManagementCommercial',
        
        'nbEmployee',
        'nbAbsenceEmployee',
        'nbRetardEmployee',
        'nbSeanceProgramme',
        'nbSeanceEffecuter',
        'nbSeanceComponser',
        'renionEffectuerConseilAdministratif',
        'renionEffectuerConseilsDepartementaux',
        'renionEffectuerConseilsPedagogiqueTa3limi',
        'renionEffectuerConseilsPedagogiqueTrbaoui',
        'renionEffectuerConseilDeGestion',
        'renionEffectuerAutreRenion',
        'renionEffectuerRien',
       'activiteEffectuerIntégrée',
        'activiteEffectuerParallel',
        'activiteEffectuerRien',
       'rapportActiviteEffectuer',
        'rapportVisit',
        'rapportAccidentScolaire',
        'different',
        'classInterieur',
        'inscritPetitDejeuner',
        'presentPetitDejeuner',
        'inscritDejeuner',
        'presentDejeuner',
        'inscritDinner',
        'presentDinner',
         'RespectProgrammeNutritional',
        'quality',
        'quantity',
        'presentRevision',
        'adressIp',
        'mac_address',

    ];}
