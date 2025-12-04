<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progress;
use App\Models\User;
use App\Models\Week;
    use App\Models\Event;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    

   
    public function changePasswordUpdate(Request $request)
    {
        if ($request->get('current_password')!= Auth::user()->password){
            return back()
                ->withErrors('Votre mot de passe actuel ne correspond pas à celui que vous avez fourni')
                ->withInput();
        }
        if (strcmp($request->get('current_password'), $request->get('new_password')) == 0) {
            return back()
                ->withErrors('Votre nouveau mot de passe ne peut pas être identique à votre mot de passe actuel

                ')
                ->withInput();
        }
        $request->validate([
            'current_password' => 'required|min:4',
            'new_password' => 'required|string|min:6|confirmed',
        ]);
        $user = Auth::user();
        $user->password = $request->get('new_password');
        $user->save();
        return back()->with('message', 'Mot de passe modifié avec succès');
    }
    public function redirectHome()
    {
        $evenements = Event::orderBy('date', 'desc')
        ->limit(5)
        ->get();
        session()->put('menu', 'Home');
        return view('Home.home', compact('evenements'));
    }



    



 
   
   
}