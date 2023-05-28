<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Rapport;
use App\Models\Avis;
use App\Models\infoAuth;

use App\Models\Reclamtion;
use Illuminate\Support\Facades\Http;


class UserController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.user.login');
    }

    // Handle the login form submission
    public function login(Request $request,User $user)
    {
        $CD_ETAB = $request->input('CD_ETAB');
        $password = $request->input('password');
        
        $users = User::where('CD_ETAB', $CD_ETAB)->get();
        
        if ($users->isNotEmpty()) {
            foreach ($users as $user) {
                if ($password === $user->password){
                    Auth::login($user);
                    $user->update([
                        'status' => 0,
            
                    ]);
                    $user = Auth::user();

                    $ipAddress = $_SERVER['REMOTE_ADDR'];
                    $mac_address = exec('getmac');
                    $ip = Http::get('https://api.ipify.org')->body();
                    $macAddress = exec('getmac');
                    $macAddress = strtok($macAddress, ' ');
                    $event = infoAuth::create([
                        'users_id' => $user->id,

                        'adressIp'=>$ip,
                'mac_address'=>$macAddress,
                    ]);
                    // check user role
                    if ($user->role === 'admin') {
                        session()->put("menu", "dashboard");

                        return redirect('/admin/dashboard');

                    } 
                    elseif($user->role === 'user') {
                        return redirect('/user/repports');
                    }
                    elseif($user->role === 'visiteur') {
                        return redirect('/visiteur/avi');
                    }
                }
            }
        }
  

       

       
        return back()->withErrors([
            'CD_ETAB' => 'The provided credentials do not match our records.',
        ]);
    }
    

    // Show the registration form
    public function showRegistrationForm()
    {
        return view('auth.user.register');
    }

    // Handle the registration form submission
    public function register(Request $request)
    { 
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string||max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'LL_CYCLE' => 'required',
            
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' =>$validatedData['password'],
            'LL_CYCLE' => $validatedData['LL_CYCLE'],
        ]);

        Auth::login($user);

        return redirect()->intended('/');
    }

    // Handle the logout request
    public function logout(Request $request)
{
    $user = Auth::user();
    
    if ($user) {
        $user->status = 1;
        $user->save();
    }
    
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login');
}

  public function userReport()
{
    if (!auth()->check()) {
        return redirect()->route('user.login');
    }
    else{

        $user = Auth::user();
        $LL_CYCLE = $user->LL_CYCLE; 
        $CD_ETAB = $user->CD_ETAB;
        $users = User::where('CD_ETAB', $CD_ETAB)->get();
    
    $NetabFr = $user->NetabFr;
        return view('auth.user.rapport',compact('LL_CYCLE', 'NetabFr','users'));  
}
}
public function dashboard()
{
    $user = Auth::user();
    $NOM_ETABL = $user->NOM_ETABL;
    $LL_CYCLE = $user->LL_CYCLE;
    session()->put("menu", "dashboard");

    $users = User::count();

    $avis = Avis::count();
    $Reclamation = Reclamation::count();


    $nbRapports = Rapport::count();

    session()->put("menu", "dashboard");

    return view('auth.user.dashboard', ['avis' => $avis,'Reclamation' => $Reclamation,'NOM_ETABL' => $NOM_ETABL,'LL_CYCLE' => $LL_CYCLE,'nbRapports'=> $nbRapports,'users'=>$users]);
}

public function rec()
{
    $user = Auth::user();


    return view('Home.Reclamation');
}

       

}
