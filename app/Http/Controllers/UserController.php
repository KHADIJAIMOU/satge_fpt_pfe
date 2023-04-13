<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle the login form submission
    public function login(Request $request)
    {
       
        $credentials = $request->only('CD_ETAB', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $LL_CYCLE = $user->LL_CYCLE;
            return redirect()->intended('/user/rapport')->withCookie(cookie('LL_CYCLE', $LL_CYCLE));
      
        } else {
            return back()->withErrors([
                'CD_ETAB' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    // Show the registration form
    public function showRegistrationForm()
    {
        return view('auth.register');
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
            'password' => bcrypt($validatedData['password']),
            'LL_CYCLE' => $validatedData['LL_CYCLE'],
        ]);

        Auth::login($user);

        return redirect()->intended('/');
    }

    // Handle the logout request
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
  public function userReport()
{
    if (!auth()->check()) {
        return redirect()->route('user.login');
    }
    else{
    $user = Auth::user();
    $LL_CYCLE = $user->LL_CYCLE;
    return view('auth.rapport', ['LL_CYCLE' => $LL_CYCLE]);
}
}
public function dashboard()
{
    $user = Auth::user();
    $NOM_ETABL = $user->NOM_ETABL;
    $LL_CYCLE = $user->LL_CYCLE;

    return view('auth.dashboard', ['NOM_ETABL' => $NOM_ETABL,'LL_CYCLE' => $LL_CYCLE]);
}

    

}
