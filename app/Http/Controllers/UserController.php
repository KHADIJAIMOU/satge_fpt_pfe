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
       
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $typeClass = $user->typeClass;
            return redirect()->intended('/user/rapport')->withCookie(cookie('typeClass', $typeClass));
      
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
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
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'typeClass' => 'required',
            
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'typeClass' => $validatedData['typeClass'],
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
    $typeClass = $user->typeClass;
    return view('auth.rapport', ['typeClass' => $typeClass]);
}
}
public function dashboard()
{
    $user = Auth::user();
    $name = $user->name;
    $typeClass = $user->typeClass;

    return view('auth.dashboard', ['name' => $name,'typeClass' => $typeClass]);
}

    

}
