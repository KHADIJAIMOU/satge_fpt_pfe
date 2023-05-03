<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Rapport;
use App\Models\User;

class AdminController extends Controller
{
   
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.admin.login');
    }

    // Handle the login form submission
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            session()->put("menu", "dashboard");
            $user = Auth::user();
            $NOM_ETABL = $user->NOM_ETABL;
            $LL_CYCLE = $user->LL_CYCLE;
            session()->put("menu", "dashboard");
        
            $users = User::count();
        
         
        
        
            $nbRapports = Rapport::count();
        
            session()->put("menu", "dashboard");
        
            return view('auth.user.dashboard', ['NOM_ETABL' => $NOM_ETABL,'LL_CYCLE' => $LL_CYCLE,'nbRapports'=> $nbRapports,'users'=>$users]);
        
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    // Show the registration form
    public function showRegistrationForm()
    {
        return view('auth.admin.register');
    }

    // Handle the registration form submission
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $admin = Admin::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        Auth::guard('admin')->login($admin);
        session()->put("menu", "dashboard");

        $user = Auth::user();
        $NOM_ETABL = $user->NOM_ETABL;
        $LL_CYCLE = $user->LL_CYCLE;
        session()->put("menu", "dashboard");
    
        $users = User::count();
    
     
    
    
        $nbRapports = Rapport::count();
    
        session()->put("menu", "dashboard");
    
        return view('auth.user.dashboard', ['NOM_ETABL' => $NOM_ETABL,'LL_CYCLE' => $LL_CYCLE,'nbRapports'=> $nbRapports,'users'=>$users]);
    
        return redirect()->intended('/admin/dashboard');
    }

// Handle the logout request
public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}
public function dashboard()
{
    session()->put("menu", "dashboard");

    $user = Auth::user();
    $NOM_ETABL = $user->NOM_ETABL;
    $LL_CYCLE = $user->LL_CYCLE;
    session()->put("menu", "dashboard");

    $users = User::count();

 


    $nbRapports = Rapport::count();
    $today = date('Y-m-d');
    session()->put("menu", "dashboard");
    $today = date('Y-m-d');
    $absencesPrimaire = Rapport::select('absenceFirstPrimaire', 'absenceSecondPrimaire', 'absenceThirdPrimaire', 'absenceFourthPrimaire', 'absenceFifthPrimaire', 'absenceSixthPrimaire')
        ->where('typeClass', 'PRIMAIRE')
        ->whereDate('created_at', $today)
        ->get();
    
        $absencePrimaireTotal = 0;

        foreach ($absencesPrimaire as $absence) {
            $absencePrimaireTotal += $absence->absenceFirstPrimaire;
            $absencePrimaireTotal += $absence->absenceSecondPrimaire;
            $absencePrimaireTotal += $absence->absenceThirdPrimaire;
            $absencePrimaireTotal += $absence->absenceFourthPrimaire;
            $absencePrimaireTotal += $absence->absenceFifthPrimaire;
            $absencePrimaireTotal += $absence->absenceSixthPrimaire;
        }
        $absencesCollege = Rapport::select('absenceFirstCollege', 'absenceSecondCollege', 'absenceThirdCollege')->where('typeClass', 'SECONDAIRE-COLLEGIAL')->whereDate('created_at', $today)
        ->get();
        $absenceCollegeTotal = 0;
        foreach ($absencesCollege as $absence) {
            $absenceCollegeTotal += $absence->absenceFirstCollege;
            $absenceCollegeTotal += $absence->absenceSecondCollege;
            $absenceCollegeTotal += $absence->absenceThirdCollege;
        }
    
    
        $absencesLycee = Rapport::select('absenceFirstLycee', 'absenceSecondLycee', 'absenceThirdLycee')->where('typeClass', 'SECONDAIRE QUALIFIANT')->whereDate('created_at', $today)
        ->get();
                $absenceLyceeTotal = 0;
        foreach ($absencesLycee as $absence) {
            $absenceLyceeTotal += $absence->absenceFirstLycee;
            $absenceLyceeTotal += $absence->absenceSecondLycee;
            $absenceLyceeTotal += $absence->absenceThirdLycee;
        } 
        $absencesBTS = Rapport::select('absenceFirstComptabiliteGeneral', 'absenceSecondComptabiliteGeneral', 'absenceFirstManagementCommercial', 'absenceSecondManagementCommercial')->where('typeClass', 'BTS + SECONDAIRE QUALIFIANT')->whereDate('created_at', $today)
        ->get();
        $absenceBTSTotal = 0;
foreach ($absencesBTS as $absence) {
    $absenceBTSTotal += $absence->absenceFirstComptabiliteGeneral;
    $absenceBTSTotal += $absence->absenceSecondComptabiliteGeneral;
    $absenceBTSTotal += $absence->absenceFirstManagementCommercial;
    $absenceBTSTotal += $absence->absenceSecondManagementCommercial;
}    
    $absenceslyceetwo= Rapport::select('absenceFirstLycee', 'absenceSecondLycee', 'absenceThirdLycee')->where('typeClass', 'BTS + SECONDAIRE QUALIFIANT')->whereDate('created_at', $today)
    ->get();
    $absencelyceetwoTotal = 0;
    foreach ($absenceslyceetwo as $absence) {
        $absencelyceetwoTotal += $absence->absenceFirstLycee;
        $absencelyceetwoTotal += $absence->absenceSecondLycee;
        $absencelyceetwoTotal += $absence->absenceThirdLycee;
    }  
    $absenceslyceeTREE= Rapport::select('absenceFirstLycee', 'absenceSecondLycee', 'absenceThirdLycee')->where('typeClass', 'SECONDAIRE QUALIFIANT + SECONDAIRE-COLLEGIAL')->whereDate('created_at', $today)
    ->get();
    $absencelyceeTREETotal = 0;
    foreach ($absenceslyceeTREE as $absence) {
        $absencelyceeTREETotal += $absence->absenceFirstLycee;
        $absencelyceeTREETotal += $absence->absenceSecondLycee;
        $absencelyceeTREETotal += $absence->absenceThirdLycee;
    } 
    $absencesCollegeOne= Rapport::select('absenceFirstCollege', 'absenceSecondCollege', 'absenceThirdCollege')->where('typeClass', 'SECONDAIRE QUALIFIANT + SECONDAIRE-COLLEGIAL')->whereDate('created_at', $today)
    ->get();
    $absencesCollegeOneTotal = 0;
    foreach ($absencesCollegeOne as $absence) {
        $absencesCollegeOneTotal += $absence->absenceFirstCollege;
        $absencesCollegeOneTotal += $absence->absenceSecondCollege;
        $absencesCollegeOneTotal += $absence->absenceThirdCollege;
    } 
    $primaire = !empty($absencePrimaireTotal) ? $absencePrimaireTotal : 0;
    $college0 = !empty($absenceCollegeTotal) ? $absenceCollegeTotal: 0;
    $college1 = !empty($absencesCollegeOneTotal) ? $absencesCollegeOneTotal: 0;
    $lycee2= !empty($absencelyceetwoTotal) ? $absencelyceetwoTotal : 0;
    $lycee3= !empty($absencelyceeTREETotal) ? $absencelyceeTREETotal : 0;
    $lycee1 = !empty($absenceLyceeTotal) ?$absenceLyceeTotal : 0;
    $lycee=$lycee1+$lycee2+$lycee3;
    $college=$college0+$college1;
    $insuffisantR= Rapport::select('RespectProgrammeNutritional')->where('RespectProgrammeNutritional', 0)->whereDate('created_at', $today)->count();
    $assezfaibleR= Rapport::select('RespectProgrammeNutritional')->where('RespectProgrammeNutritional', 1)->whereDate('created_at', $today)->count();
    $faibleR= Rapport::select('RespectProgrammeNutritional')->where('RespectProgrammeNutritional', 2)->whereDate('created_at', $today)->count();
    $passableR= Rapport::select('RespectProgrammeNutritional')->where('RespectProgrammeNutritional', 3)->whereDate('created_at', $today)->count();
    $assezbienR= Rapport::select('RespectProgrammeNutritional')->where('RespectProgrammeNutritional', 4)->whereDate('created_at', $today)->count();
    $bienR= Rapport::select('RespectProgrammeNutritional')->where('RespectProgrammeNutritional', 5)->whereDate('created_at', $today)->count();
/*quality*/
    $insuffisantquality= Rapport::select('quality')->where('quality', 0)->whereDate('created_at', $today)->count();
    $assezfaiblequality= Rapport::select('quality')->where('quality', 1)->whereDate('created_at', $today)->count();
    $faiblequality= Rapport::select('quality')->where('quality', 2)->whereDate('created_at', $today)->count();
    $passablequality= Rapport::select('quality')->where('quality', 3)->whereDate('created_at', $today)->count();
    $assezbienquality= Rapport::select('quality')->where('quality', 4)->whereDate('created_at', $today)->count();
    $bienquality= Rapport::select('quality')->where('quality', 5)->whereDate('created_at', $today)->count();
/*quantity*/
$insuffisantquantity= Rapport::select('quantity')->where('quantity', 0)->whereDate('created_at', $today)->count();
$assezfaiblequantity= Rapport::select('quantity')->where('quantity', 1)->whereDate('created_at', $today)->count();
$faiblequantity= Rapport::select('quantity')->where('quantity', 2)->whereDate('created_at', $today)->count();
$passablequantity= Rapport::select('quantity')->where('quantity', 3)->whereDate('created_at', $today)->count();
$assezbienquantity= Rapport::select('quantity')->where('quantity', 4)->whereDate('created_at', $today)->count();
$bienquantity= Rapport::select('quantity')->where('quantity', 5)->whereDate('created_at', $today)->count();
    $bts = !empty($absenceBTSTotal) ? $absenceBTSTotal : 0;
    return view('auth.admin.dashboard', ['NOM_ETABL' => $NOM_ETABL,'LL_CYCLE' => $LL_CYCLE,'nbRapports'=> $nbRapports,'insuffisantR'=>$insuffisantR,'assezfaibleR'=>$assezfaibleR,'faibleR'=>$faibleR,'passableR'=>$passableR,'bienR'=>$bienR,'assezbienR'=>$assezbienR,'insuffisantquality'=>$insuffisantquality,'assezfaiblequality'=>$assezfaiblequality,'faiblequality'=>$faiblequality,'passablequality'=>$passablequality,'bienquality'=>$bienquality,'assezbienquality'=>$assezbienquality,'insuffisantquantity'=>$insuffisantquantity,'assezfaiblequantity'=>$assezfaiblequantity,'faiblequantity'=>$faiblequantity,'passablequantity'=>$passablequantity,'bienquantity'=>$bienquantity,'assezbienquantity'=>$assezbienquantity,'users'=>$users,'bts'=>$bts,'lycee'=>$lycee,'college'=>$college,'primaire'=>$primaire]);

}

}