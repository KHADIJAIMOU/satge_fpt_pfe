<?php

namespace App\Http\Controllers;

use App\Models\Rapport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class RapportController extends Controller
{
    public function profil()
    {
        $user = Auth::user();
                session()->put("menu", "profil");

        return view('auth.user.profil', compact('user'));
    }
    public function indexReport()
    {

        $user_id = Auth::user()->id;
        $lists = Rapport::where('users_id', $user_id)->paginate(10);
        session()->put("menu", "repports");
        return view('auth.user.repports', compact('lists'));
    }
    
    public function index()
    {
        $rapports = Rapport::all();
        if (!auth()->check()) {
            return redirect()->route('user.login');
        }
        else{
    
            $user = Auth::guard('web')->user();
            $LL_CYCLE = $user->LL_CYCLE;
            
            $CD_ETAB = $user->CD_ETAB;
            $users = User::where('CD_ETAB', $CD_ETAB)->get();
        
        $NetabFr = $user->NetabFr;
            return view('auth.user.rapport',compact('LL_CYCLE', 'NetabFr','users'));  
        }
      }
      private function getMacAddressFromCommandOutput($output)
{
    foreach($output as $line){
        if (strpos($line, "Physical Address") !== false){
            $mac = substr($line, strpos($line, "Physical Address") + 36);
            return trim($mac);
        }
    }
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
        'typeClass' => 'required',
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
       'renionEffectuerConseilAdministratif' => 'nullable',
        'renionEffectuerConseilsDepartementaux' => 'nullable',
        'renionEffectuerConseilsPedagogiqueTa3limi' => 'nullable',
        'renionEffectuerConseilsPedagogiqueTrbaoui' => 'nullable',
        'renionEffectuerConseilDeGestion' => 'nullable',
        'renionEffectuerAutreRenion' => 'nullable',
        'renionEffectuerRien' => 'nullable',
        'activiteEffectuerIntégrée' => 'nullable',
        'activiteEffectuerParallel' => 'nullable',
        'activiteEffectuerRien' => 'nullable',
        'rapportActiviteEffectuer' => 'nullable',
        'rapportVisit' => 'nullable',
        'rapportAccidentScolaire' => 'nullable',
        'different' => 'nullable',
        'classInterieur' => 'nullable',
       'inscritPetitDejeuner' => 'nullable|integer',
        'presentPetitDejeuner' => 'nullable|integer',
        'inscritDejeuner' => 'nullable|integer',
        'presentDejeuner' => 'nullable|integer',
         'inscritDinner' => 'nullable|integer',
        'presentDinner' => 'nullable|integer',
        'RespectProgrammeNutritional' => 'nullable|integer',
        'quality' => 'nullable|integer',
        'quantity' => 'nullable|integer',
        'presentRevision'=> 'nullable|integer',
        ]);
        $user = Auth::user();
        $text = "";
        $CD_ETAB = $user->CD_ETAB;
        $users = User::where('CD_ETAB', $CD_ETAB)->get();

        $count = count($users);
        foreach($users as $key => $user) {
            $text .= $user->LL_CYCLE;
            if($key !== $count - 1) {
                $text .= " + ";
            }
        }
        $user = Auth::user();
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $mac_address = exec('getmac');
        $ip = Http::get('https://api.ipify.org')->body();
        $macAddress = exec('getmac');
        $macAddress = strtok($macAddress, ' ');
        $admin = new Rapport([
            'users_id' => $user->id,
            'date' => $validatedData['date'],
            'typeClass' =>$validatedData['typeClass'],
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
            'absenceSixthPrimaire' => $validatedData['absenceSixthPrimaire']?? null,
            'totalSixthPrimaire' => $validatedData['totalSixthPrimaire']?? null,
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
            'renionEffectuerConseilAdministratif' => $validatedData['renionEffectuerConseilAdministratif']??'non',
            'renionEffectuerConseilsDepartementaux' =>$validatedData['renionEffectuerConseilsDepartementaux']??'non',
            'renionEffectuerConseilsPedagogiqueTa3limi' =>$validatedData['renionEffectuerConseilsPedagogiqueTa3limi']??'non',
            'renionEffectuerConseilsPedagogiqueTrbaoui' =>$validatedData['renionEffectuerConseilsPedagogiqueTrbaoui']??'non',
            'renionEffectuerConseilDeGestion' =>$validatedData['renionEffectuerConseilDeGestion']??'non',
            'renionEffectuerAutreRenion' =>$validatedData['renionEffectuerAutreRenion']??'non',
            'renionEffectuerRien' =>$validatedData['renionEffectuerRien']??'non',
            'activiteEffectuerIntégrée' =>$validatedData['activiteEffectuerIntégrée']??'non',
            'activiteEffectuerParallel' =>$validatedData['activiteEffectuerParallel']??'non',
            'activiteEffectuerRien' =>$validatedData['activiteEffectuerRien']??'non',
            'rapportActiviteEffectuer' =>isset($validatedData['rapportActiviteEffectuer']) ? $validatedData['rapportActiviteEffectuer'] : 'rien',
            'rapportVisit' =>isset($validatedData['rapportVisit']) ? $validatedData['rapportVisit'] : 'rien',
            'rapportAccidentScolaire' =>isset($validatedData['rapportAccidentScolaire']) ? $validatedData['rapportAccidentScolaire'] : 'rien',
            'different' =>isset($validatedData['different']) ? $validatedData['different'] : 'rien',
            'classInterieur' =>isset($validatedData['classInterieur']) ? $validatedData['classInterieur'] : 'non',
             'inscritPetitDejeuner' => $validatedData['inscritPetitDejeuner'],
            'presentPetitDejeuner'=> $validatedData['presentPetitDejeuner'],
            'inscritDejeuner' => $validatedData['inscritDejeuner'],
            'presentDejeuner' => $validatedData['presentDejeuner'],
            'inscritDinner' => $validatedData['inscritDinner'],
            'presentDinner' => $validatedData['presentDinner'],
            'RespectProgrammeNutritional' => $validatedData['RespectProgrammeNutritional'] ?? 0,
            'quality' => $validatedData['quality']?? 0,
            'quantity' => $validatedData['quantity'] ?? 0,
            'presentRevision'=> $validatedData['presentRevision'],
            'adressIp'=>$ip,
            'mac_address'=>$macAddress,
             ]);
        $admin->save();
    return redirect()->route('rapport.index')->with('success', 'Rapport added successfully.')->withErrors($validatedData)
        ->withInput();
}

    

    public function show(Rapport $Rapport)
    {
        $user = Auth::user();
        $LL_CYCLE = $user->LL_CYCLE;
        $NetabFr = $user->NetabFr;
        $CD_ETAB = $user->CD_ETAB;
        $users = User::where('CD_ETAB', $CD_ETAB)->get();
    

        
        return view('auth.user.rapport.show', compact('LL_CYCLE','NetabFr','user','Rapport','users'));    }

    public function edit(Rapport $Rapport)
    {
        
        $user = Auth::user();
        $LL_CYCLE = $user->LL_CYCLE;
        $NetabFr = $user->NetabFr;
        $CD_ETAB = $user->CD_ETAB;
        $users = User::where('CD_ETAB', $CD_ETAB)->get();
    

        
        return view('auth.user.rapport.edit', compact('LL_CYCLE','NetabFr','user','Rapport','users'));
    }

    public function update(Request $request, Rapport $rapport)
    {
        //VALIDATION
        $validatedData = Validator::make(request()->all(), [
            'date' => 'required|date',
        'typeClass' => 'required',
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
       'renionEffectuerConseilAdministratif' => 'nullable',
        'renionEffectuerConseilsDepartementaux' => 'nullable',
        'renionEffectuerConseilsPedagogiqueTa3limi' => 'nullable',
        'renionEffectuerConseilsPedagogiqueTrbaoui' => 'nullable',
        'renionEffectuerConseilDeGestion' => 'nullable',
        'renionEffectuerAutreRenion' => 'nullable',
        'renionEffectuerRien' => 'nullable',
        'activiteEffectuerIntégrée' => 'nullable',
        'activiteEffectuerParallel' => 'nullable',
        'activiteEffectuerRien' => 'nullable',
        'rapportActiviteEffectuer' => 'nullable',
        'rapportVisit' => 'nullable',
        'rapportAccidentScolaire' => 'nullable',
        'different' => 'nullable',
        'classInterieur' => 'nullable',
       'inscritPetitDejeuner' => 'nullable|integer',
        'presentPetitDejeuner' => 'nullable|integer',
        'inscritDejeuner' => 'nullable|integer',
        'presentDejeuner' => 'nullable|integer',
         'inscritDinner' => 'nullable|integer',
        'presentDinner' => 'nullable|integer',
        'RespectProgrammeNutritional' => 'nullable|integer',
        'quality' => 'nullable|integer',
        'quantity' => 'nullable|integer',
        'presentRevision'=> 'nullable|integer',
        ]);

        if ($validatedData->fails()) {
            return back()
                ->withErrors($validatedData)
                ->withInput();
        }
        $user = Auth::user();
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $mac_address = exec('getmac');
        $ip = Http::get('https://api.ipify.org')->body();
        $macAddress = exec('getmac');
        $macAddress = strtok($macAddress, ' ');
        $rapport->update([
            'date' => $request->date,
            'typeClass' => $request->typeClass,
            'absenceFirstPrimaire' => $request->absenceFirstPrimaire,
            'nbSeanceProgramme' => $request->nbSeanceProgramme,
            'totalFirstPrimaire' => $request->totalFirstPrimaire,
            'nbRetardEmployee' => $request->nbRetardEmployee,
            'absenceSecondPrimaire' => $request->absenceSecondPrimaire,
            'totalSecondPrimaire' => $request->totalSecondPrimaire,
            'absenceThirdPrimaire' => $request->absenceThirdPrimaire,
            'totalThirdPrimaire' => $request->totalThirdPrimaire,
            'absenceFourthPrimaire' => $request->absenceFourthPrimaire,
            'totalFourthPrimaire' => $request->totalFourthPrimaire,
            'absenceFifthPrimaire' => $request->absenceFifthPrimaire,
            'totalFifthPrimaire' => $request->totalFifthPrimaire,
            'absenceSixthPrimaire' => $request->absenceSixthPrimaire,
            'totalSixthPrimaire' => $request->totalSixthPrimaire,
            'absenceFirstCollege' => $request->absenceFirstCollege,
            'totalFirstCollege' => $request->totalFirstCollege,
            'absenceSecondCollege' => $request->absenceSecondCollege,
            'totalSecondCollege' => $request->totalSecondCollege,
            'absenceThirdCollege' => $request->absenceThirdCollege,
            'totalThirdCollege' => $request->totalThirdCollege,
            'absenceFirstLycee' => $request->absenceFirstLycee,
            'totalFirstLycee' => $request->totalFirstLycee,
            'absenceSecondLycee' => $request->absenceSecondLycee,
            'totalSecondLycee' => $request->totalSecondLycee,
            'absenceThirdLycee' => $request->absenceThirdLycee,
            'totalThirdLycee' => $request->totalThirdLycee,
            'absenceFirstComptabiliteGeneral' => $request->absenceFirstComptabiliteGeneral,
            'totalFirstComptabiliteGeneral' => $request->totalFirstComptabiliteGeneral,
            'absenceSecondComptabiliteGeneral' => $request->absenceSecondComptabiliteGeneral,
            'totalSecondComptabiliteGeneral' => $request->totalSecondComptabiliteGeneral,
            'absenceFirstManagementCommercial' => $request->absenceFirstManagementCommercial,
            'totalFirstManagementCommercial' => $request->totalFirstManagementCommercial,
            'absenceSecondManagementCommercial' => $request->absenceSecondManagementCommercial,
            'totalSecondManagementCommercial' => $request->totalSecondManagementCommercial,
            'nbEmployee' => $request->nbEmployee,
            'nbAbsenceEmployee' => $request->nbAbsenceEmployee,
            'nbSeanceEffecuter' => $request->nbSeanceEffecuter,
            'nbSeanceComponser' => $request->nbSeanceComponser,
            'renionEffectuerConseilAdministratif' => $request->renionEffectuerConseilAdministratif,
            'renionEffectuerConseilsDepartementaux' => $request->renionEffectuerConseilsDepartementaux,
            'renionEffectuerConseilsPedagogiqueTa3limi' => $request->renionEffectuerConseilsPedagogiqueTa3limi,
            'renionEffectuerConseilsPedagogiqueTrbaoui' => $request->renionEffectuerConseilsPedagogiqueTrbaoui,
            'renionEffectuerConseilDeGestion' => $request->renionEffectuerConseilDeGestion,
            'renionEffectuerAutreRenion' => $request->renionEffectuerAutreRenion,
            'renionEffectuerRien' => $request->renionEffectuerRien,
            'activiteEffectuerIntégrée' => $request->activiteEffectuerIntégrée,
            'activiteEffectuerParallel' => $request->activiteEffectuerParallel,
            'activiteEffectuerRien' => $request->activiteEffectuerRien,
            'rapportActiviteEffectuer' => $request->rapportActiviteEffectuer,
            'rapportVisit' => $request->rapportVisit,
            'rapportAccidentScolaire' => $request->rapportAccidentScolaire,
            'different' => $request->different,
            'classInterieur' => $request->classInterieur,
            'inscritPetitDejeuner' => $request->inscritPetitDejeuner,
            'presentPetitDejeuner' => $request->presentPetitDejeuner,
            'inscritDejeuner' => $request->inscritDejeuner,
            'presentDejeuner' => $request->presentDejeuner,
            'inscritDinner' => $request->inscritDinner,
            'presentDinner' => $request->presentDinner,
            'RespectProgrammeNutritional' => $request->RespectProgrammeNutritional,
            'quality' => $request->quality,
            'quantity' => $request->quantity,
            'presentRevision' => $request->presentRevision,
            'adressIp' => $ip,
            'mac_address' => $macAddress,

            
            
        ]);

        return redirect('/user/repports')->with([
            'type' => 'success',
            'message' => 'Rapport N'.$rapport->id.'  modifié avec succès',
        ]);
    }

    public function destroy($rapport)
    {
    
        Rapport::find($rapport)->delete();

        return redirect('/user/repports')->with([
            'type' => 'success',
            'message' => 'Rapport  supprimée avec succès',
        ]);
    }
    
}