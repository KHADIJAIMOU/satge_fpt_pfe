<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
class UsersController extends Controller
{
    public function profil()
    {
        $user = Auth::user();
                session()->put("menu", "profil");
                return view('auth.admin.users.profil', compact('user'));

    }
    public function profileUpdate(Request $request)
    {
        //validation rules

        $request->validate([
            'password' => 'required|min:4|string|max:255',
        ]);
        $user = Auth::user();
        $user->password = $request['password'];
        $user->save();
        return redirect('/admin/profil')->with([
            'type' => 'success',
            'message' => 'Profile modifié avec succès',
        ]);
    }
    public function profileUpdateUser(Request $request)
    {
        //validation rules

        $request->validate([
            'password' => 'required|min:4|string|max:255',
        ]);
        $user = Auth::user();
        $user->password = $request['password'];
        $user->save();
        return redirect('/user/profil')->with([
            'type' => 'success',
            'message' => 'Profile modifié avec succès',
        ]);
    }
    public function Base()
    {
        $user = Auth::user();
                session()->put("menu", "profil");

                return view('auth.admin.base', compact('user'));
            }
            public function Base1()
            {
                $user = Auth::user();
                        session()->put("menu", "profil");
        
                        return view('auth.user.baseUser', compact('user'));
                    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(8);
        session()->put("menu", "users");
        return view('auth.admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //VALIDATION
        $validator = Validator::make(request()->all(), [
            
        'CD_ETAB'=> 'required',
        'NOM_ETABL'=> 'required',
        'NOM_ETABA'=> 'required',
        'la_com'=> 'required',
        'll_com'=> 'required',
        'typeEtab'=> 'required',
        'LL_CYCLE'=> 'required',
        'LA_CYCLE'=> 'required',
        'NetabFr'=> 'required',
        'CD_GIPE'=> 'required',
        'password'=> 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/users/create')
                ->withErrors($validator)
                ->withInput();
        }

        $User = new User();
        $User->create([
            'CD_ETAB'=> $request->CD_ETAB,
        'NOM_ETABL'=> $request->NOM_ETABL,
        'NOM_ETABA'=> $request->NOM_ETABA,
        'la_com'=> $request->la_com,
        'll_com'=> $request->ll_com,
        'typeEtab'=> $request->typeEtab,
        'LL_CYCLE'=> $request->LL_CYCLE,
        'LA_CYCLE'=> $request->LA_CYCLE,
        'NetabFr'=> $request->NetabFr,
        'CD_GIPE'=> $request->CD_GIPE,
        'password'=> $request->password,
        

        ]);

        return redirect('/admin/users')->with([
            'type' => 'success',
            'message' => 'Utilisateur créée avec succès',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $User)
    {
         return view('auth.admin.users.show', compact('User'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $User)
    {
        return view('auth.admin.users.edit', compact('User'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $User)
    {
        //VALIDATION
        $validator = Validator::make(request()->all(), [
            'CD_ETAB'=> 'required',
            'NOM_ETABL'=> 'required',
            'NOM_ETABA'=> 'required',
            'la_com'=> 'required',
            'll_com'=> 'required',
            'typeEtab'=> 'required',
            'LL_CYCLE'=> 'required',
            'LA_CYCLE'=> 'required',
            'NetabFr'=> 'required',
            'CD_GIPE'=> 'required',
            'password'=> 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $User->update([
            'CD_ETAB'=> $request->CD_ETAB,
            'NOM_ETABL'=> $request->NOM_ETABL,
            'NOM_ETABA'=> $request->NOM_ETABA,
            'la_com'=> $request->la_com,
            'll_com'=> $request->ll_com,
            'typeEtab'=> $request->typeEtab,
            'LL_CYCLE'=> $request->LL_CYCLE,
            'LA_CYCLE'=> $request->LA_CYCLE,
            'NetabFr'=> $request->NetabFr,
            'CD_GIPE'=> $request->CD_GIPE,
            'password'=> $request->password,
            
        ]);

        return redirect('/admin/users')->with([
            'type' => 'success',
            'message' => 'Utilisateur modifié avec succès',
        ]);
    }
    public function editPassword(User $User)
    {
        return view('auth.admin.users.edit', compact('User'));
    }
    public function updatePassword(Request $request, User $user)
    {
        try {
            $user = User::findOrFail($user->id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => 'User not found',
            ]);
        }
    
        $user->update([
            'password' => $request->password,
        ]);
    
        return response()->json([
            'success' => true,
            'message' => 'Password updated successfully',
        ]);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $User)
    {
        $User->delete();

        return redirect('/admin/users')->with([
            'type' => 'success',
            'message' => 'Utilisateur supprimé avec succès',
        ]);
    }
    /**
     * function profil
     */
    // public function profil()
    // {
    //     session()->put("menu", "profil");
    //     return view('/admin/profil');
    // }
    /**
     * function informations
     */
    public function informations()
    {
        session()->put("menu", "profil");
        session()->put("submenu", "informations");
        return view('/admin/profil/informations');
    }
    /**
     * function password
     */
    public function password()
    {
        session()->put("menu", "profil");
        session()->put("submenu", "password");
        return view('/admin/profil/password');
    }
    

    /**
     * 
     */
    public function changePasswordUpdate(Request $request)
    {
        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            return back()->with('error', 'Your current password does not match what you provided');
        }
        if (strcmp($request->get('current_password'), $request->get('new_password')) == 0) {
            return back()->with('error', 'Your new password cant be same with your current password');
        }
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed'
        ]);
        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();
        return back()->with('message', 'Mot de Passe Modifié');
    }
}