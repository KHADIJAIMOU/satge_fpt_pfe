<?php

namespace App\Http\Controllers;

use App\Models\Rapport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RapportController extends Controller
{
    public function index()
    {
        $rapports = Rapport::all();

        $user = Auth::user();
        $LL_CYCLE = $user->LL_CYCLE;
        
        $CD_ETAB = $user->CD_ETAB;
        $users = User::where('CD_ETAB', $CD_ETAB)->get();
    
    $NetabFr = $user->NetabFr;
        return view('auth.user.rapport',compact('LL_CYCLE', 'NetabFr','users'));  
      }
    public function create()
    {
        $user = Auth::user();
        $LL_CYCLE = $user->LL_CYCLE;
        $NetabFr = $user->NetabFr;

        return view('rapports.create', ['LL_CYCLE' => $LL_CYCLE, 'NetabFr'=>$NetabFr]); 
    }
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'date' => 'required|date',
        'absenceFirstPrimaire' => 'nullable|integer',
        'totalFirstPrimaire' => 'nullable|integer',
        'absenceSecondPrimaire' => 'nullable|integer',
        'totalSecondPrimaire' => 'nullable|integer',
        'absenceThirdPrimaire' => 'nullable|integer',
        'totalThirdPrimaire' => 'nullable|integer',
        'absenceFourthPrimaire' => 'nullable|integer',
        'totalFourthPrimaire' => 'nullable|integer',
        'absenceFifthPrimaire' => 'nullable|integer',
        'totalFifthPrimaire' => 'nullable|integer',
        'absenceSixthPrimaire' => 'nullable|integer',
        'totalSixthPrimaire' => 'nullable|integer',
        'absenceFirstCollege' => 'nullable|integer',
        'totalFirstCollege' => 'nullable|integer',
        'absenceSecondCollege' => 'nullable|integer',
        'totalSecondCollege' => 'nullable|integer',
        'absenceThirdCollege' => 'nullable|integer',
        'totalThirdCollege' => 'nullable|integer',
        'absenceFirstLycee' => 'nullable|integer',
        'totalFirstLycee' => 'nullable|integer',
        'absenceSecondLycee' => 'nullable|integer',
        'totalSecondLycee' => 'nullable|integer',
        'absenceThirdLycee' => 'nullable|integer',
        'totalThirdLycee' => 'nullable|integer',
        'absenceFirstComptabiliteGeneral' => 'nullable|integer',
        'totalFirstComptabiliteGeneral' => 'nullable|integer',
        'absenceSecondComptabiliteGeneral' => 'nullable|integer',
        'totalSecondComptabiliteGeneral' => 'nullable|integer',
        'absenceFirstManagementCommercial' => 'nullable|integer',
        'totalFirstManagementCommercial' => 'nullable|integer',
        'absenceSecondManagementCommercial' => 'nullable|integer',
        'totalSecondManagementCommercial' => 'nullable|integer',
        'nbEmployee' => 'required',
        'nbAbsenceEmployee' => 'required',
        'nbRetardEmployee' => 'required',
        'nbSeanceProgramme' => 'required',
        'nbSeanceEffecuter' => 'required',
        'nbSeanceComponser' => 'required',
       'renionEffectuerConseilAdministratif' => 'nullable|integer',
        'renionEffectuerConseilsDepartementaux' => 'nullable|integer',
        'renionEffectuerConseilsPedagogiqueTa3limi' => 'nullable|integer',
        'renionEffectuerConseilsPedagogiqueTrbaoui' => 'nullable|integer',
        'renionEffectuerConseilDeGestion' => 'nullable|integer',
        'renionEffectuerAutreRenion' => 'nullable|integer',
        'renionEffectuerRien' => 'nullable|integer',
        'activiteEffectuerIntégrée' => 'nullable|integer',
        'activiteEffectuerParallel' => 'nullable|integer',
        'activiteEffectuerRien' => 'nullable|integer',
        'rapportActiviteEffectuer' => 'required',
        'rapportVisit' => 'required',
        'rapportAccidentScolaire' => 'required',
        'different' => 'required',
        'classInterieur' => 'required',
       'inscritPetitDejeuner' => 'required|integer',
        'presentPetitDejeuner' => 'required|integer',
        'inscritDejeuner' => 'required|integer',
        'presentDejeuner' => 'required|integer',
         'inscritDinner' => 'required|integer',
        'presentDinner' => 'required|integer',
        'RespectProgrammeNutritional' => 'required|integer',
        'quality' => 'required|integer',
        'quantity' => 'required|integer',
        'presentRevision'=> 'required|integer',
        ]);
        $user = Auth::user();
    
        $user = Auth::user();
        $admin = new Rapport([
            'users_id' => $user->id,
            'date' => $validatedData['date'],
            'absenceFirstPrimaire' => $validatedData['absenceFirstPrimaire']?? null,
            'totalFirstPrimaire' => $validatedData['totalFirstPrimaire']?? null,
            'absenceSecondPrimaire' => $validatedData['absenceSecondPrimaire']?? null,
            'totalSecondPrimaire' => $validatedData['totalSecondPrimaire']?? null,
            'absenceThirdPrimaire' => $validatedData['absenceThirdPrimaire']?? null,
            'totalThirdPrimaire' => $validatedData['totalThirdPrimaire']?? null,
            'absenceFourthPrimaire' => $validatedData['absenceFourthPrimaire']?? null,
            'totalFourthPrimaire' => $validatedData['totalFourthPrimaire']?? null,
            'absenceFifthPrimaire' => $validatedData['absenceFifthPrimaire']?? null,
            'totalFifthPrimaire' => $validatedData['totalFifthPrimaire']?? null,
            ' absenceSixthPrimaire' => $validatedData['absenceSixthPrimaire']?? null,
            ' totalSixthPrimaire' => $validatedData['totalSixthPrimaire']?? null,
            'absenceFirstCollege' => $validatedData['absenceFirstCollege']?? null,
            'totalFirstCollege' => $validatedData['totalFirstCollege']?? null,
            'absenceSecondCollege' => $validatedData['absenceSecondCollege']?? null,
            'totalSecondCollege' => $validatedData['totalSecondCollege']?? null,
            'absenceThirdCollege' => $validatedData['absenceThirdCollege']?? null,
            'totalThirdCollege' => $validatedData['totalThirdCollege']??null,
            'absenceFirstLycee' => $validatedData['absenceFirstLycee']??null,
            'totalFirstLycee' => $validatedData['totalFirstLycee']??null,
            'absenceSecondLycee' => $validatedData['absenceSecondLycee']??null,
            'totalSecondLycee' => $validatedData['totalSecondLycee']??null,
            'absenceThirdLycee' => $validatedData['absenceThirdLycee']??null,
            'totalThirdLycee' => $validatedData['totalThirdLycee']??null,
            'absenceFirstComptabiliteGeneral' => $validatedData['absenceFirstComptabiliteGeneral']??null,
            'totalFirstComptabiliteGeneral' => $validatedData['totalFirstComptabiliteGeneral']??null,
            'absenceSecondComptabiliteGeneral' => $validatedData['absenceSecondComptabiliteGeneral']??null,
            'totalSecondComptabiliteGeneral' => $validatedData['totalSecondComptabiliteGeneral']??null,
            'absenceFirstManagementCommercial' => $validatedData['absenceFirstManagementCommercial']??null,
            'totalFirstManagementCommercial' => $validatedData['totalFirstManagementCommercial']??null,
            'absenceSecondManagementCommercial' => $validatedData['absenceSecondManagementCommercial']??null,
            'totalSecondManagementCommercial' => $validatedData['totalSecondManagementCommercial']??null, 
            'nbEmployee' => $validatedData['nbEmployee'],
            'nbAbsenceEmployee' => $validatedData['nbAbsenceEmployee'],
            'nbRetardEmployee' => $validatedData['nbRetardEmployee'],
            'nbSeanceProgramme' => $validatedData['nbSeanceProgramme'],
            'nbSeanceEffecuter' => $validatedData['nbSeanceEffecuter'],
            'nbSeanceComponser' => $validatedData['nbSeanceComponser'],
            'renionEffectuerConseilAdministratif' => isset($validatedData['renionEffectuerConseilAdministratif']) ? 1 : 0,
            'renionEffectuerConseilsDepartementaux' => isset($validatedData['renionEffectuerConseilsDepartementaux']) ? 1 : 0,
            'renionEffectuerConseilsPedagogiqueTa3limi' => isset($validatedData['renionEffectuerConseilsPedagogiqueTa3limi']) ? 1 : 0,
            'renionEffectuerConseilsPedagogiqueTrbaoui' => isset($validatedData['renionEffectuerConseilsPedagogiqueTrbaoui']) ? 1 : 0,
            'renionEffectuerConseilDeGestion' => isset($validatedData['renionEffectuerConseilDeGestion']) ? 1 : 0,
            'renionEffectuerAutreRenion' => isset($validatedData['renionEffectuerAutreRenion']) ? 1 : 0,
            'renionEffectuerRien' => isset($validatedData['renionEffectuerRien']) ? 1 : 0,
            'activiteEffectuerIntégrée' => isset($validatedData['activiteEffectuerIntégrée']) ? 1 : 0,
            'activiteEffectuerParallel' => isset($validatedData['activiteEffectuerParallel']) ? 1 : 0,
            'activiteEffectuerRien' => isset($validatedData['activiteEffectuerRien']) ? 1 : 0,
            'rapportActiviteEffectuer' => $validatedData['rapportActiviteEffectuer'],
            'rapportVisit' => $validatedData['rapportVisit'],
            'rapportAccidentScolaire' => $validatedData['rapportAccidentScolaire'],
            'different' => $validatedData['different'],
            'classInterieur' =>$validatedData['classInterieur'],
             'inscritPetitDejeuner' => $validatedData['inscritPetitDejeuner'],
            'presentPetitDejeuner'=> $validatedData['presentPetitDejeuner'],
            'inscritDejeuner' => $validatedData['inscritDejeuner'],
            'presentDejeuner' => $validatedData['presentDejeuner'],
            'inscritDinner' => $validatedData['inscritDinner'],
            'presentDinner' => $validatedData['presentDinner'],
            'RespectProgrammeNutritional' => $validatedData['RespectProgrammeNutritional'],
            'quality' => $validatedData['quality'],
            'quantity' => $validatedData['quantity'],
            'presentRevision'=> $validatedData['presentRevision'],
             ]);
        $admin->save();
    return redirect()->route('rapport.index')->with('success', 'Rapport added successfully.')->withErrors($validatedData)
        ->withInput();
}

    

    public function show(Rapport $rapport)
    {
        return view('rapports.show', compact('rapport'));
    }

    public function edit(Rapport $rapport)
    {
        return view('rapports.edit', compact('rapport'));
    }

    public function update(Request $request, Rapport $rapport)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'type_class' => 'required',
            'absence_first_lycee' => 'required_if:type_class,lycee|integer',
            'total_first_lycee' => 'required_if:type_class,lycee|integer',
            'absence_second_lycee' => 'required_if:type_class,lycee|integer',
            'total_second_lycee' => 'required_if:type_class,lycee|integer',
            'absence_third_lycee' => 'required_if:type_class,lycee|integer',
            'total_third_lycee' => 'required_if:type_class,lycee|integer',
            'absence_first_college' => 'required_if:type_class,college|integer',
            'total_first_college' => 'required_if:type_class,college|integer',
            'absence_second_college' => 'required_if:type_class,college|integer',
            'total_second_college' => 'required_if:type_class,college|integer',
        ]);

        $rapport->update($validatedData);

        return redirect()->route('rapports.index')
            ->with('success', 'Rapport updated successfully.');
    }

    public function destroy(Rapport $rapport)
    {
        $rapport->delete();
        return redirect()->route('rapports.index')
            ->with('success', 'Rapport deleted successfully.');
    }
}