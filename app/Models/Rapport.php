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

    ];}
