<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Rapport;
use App\Models\Avis;
use App\Models\Reclamation;
use App\Models\Document;


class VisiteurController extends Controller
{
    
    // Handle the login form submission
    private function uploadImage(Request $request, $reclamation_id)
    {
        $validator = $request->validate([
            'images.*' => 'required|file|max:2048',
        ]);
    
        if ($request->hasFile('images')) {
            $images = $request->file('images');
    
            foreach ($images as $image) {
                $name = $image->getClientOriginalName();
                $path = $image->storeAs('images', $name, 'public');
    
                Document::create([
                    'reclamation_id' => $reclamation_id,
                    'name' => $name,
                    'path' => 'storage/' . $path,
                ]);
            }
        }
    }
    public function indexchangePasswordUpdate()
    {
        return view('Home.changepassword');
    } 
    public function indexinformationupdate()
    {
        return view('Home.informationprofil');
    }
    public function profileUpdate(Request $request)
    {
        // Validation rules
        $request->validate([
            'NOM_ETABL' => 'required',
            'CD_ETAB' => 'required',
        ]);
    
        $user = Auth::user();
    
       
            // Update the user without the image
            $user->update([
                'NOM_ETABL' => $request->NOM_ETABL,
                'CD_ETAB' => $request->CD_ETAB,

            ]);
        
    
        return redirect('/visiteur/informationprofile')->with([
            'type' => 'success',
            'message' => 'Profile modifié avec succès',
        ]);
    }
    public function changePasswordUpdate(Request $request)
    {
        if ($request->get('current_password') !== Auth::user()->password) {
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

public function indexAvis()
{
    $user_id = Auth::user()->id;
    $avis = Avis::where('users_id', $user_id)->paginate(3);
    $idd =Auth::user()->id;

    return view('Home.Avis', compact('avis','idd'));
}
public function indexreclamation()
{
    $user_id = Auth::user()->id;
    $idd =Auth::user()->id;

    $reclamation = Reclamation::where('users_id', $user_id)->paginate(3);
    return view('Home.Reclamation', compact('reclamation','idd'));
}
public function storeAvis(Request $request)
    {
        $id =Auth::user()->id;
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $mac_address = exec('getmac');
        $ip = Http::get('https://api.ipify.org')->body();
        $macAddress = exec('getmac');
        $macAddress = strtok($macAddress, ' ');
        Avis::create([
            'users_id' =>$id,
            'objet' => $request->objet,
            'type' => $request->type,
            'detail' => $request->detail,
            'adressIp'=>$ip,
            'mac_address'=>$macAddress,
        ]);

        return redirect('/visiteur/avi')->with([
            'type' => 'success',
            'message' => 'Avis créée avec succès ',
        ]);
    }
    
   
    public function destroyAvis($id)
    {
        Avis::find($id)->delete();

        return redirect('/visiteur/avi')->with([
            'type' => 'success',
            'message' => 'Avis supprimée avec succès',
        ]);
    }    

    public function destroyreclamation($id)
    {
        Reclamation::find($id)->delete();

        return redirect('/visiteur/reclamation')->with([
            'type' => 'success',
            'message' => 'reclamation supprimée avec succès',
        ]);
    }  
    public function storereclamation(Request $request,$id)
    {
        $id =Auth::user()->id;

        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $mac_address = exec('getmac');
        $ip = Http::get('https://api.ipify.org')->body();
        $macAddress = exec('getmac');
        $macAddress = strtok($macAddress, ' ');
        $rec=Reclamation::create([
            'users_id' => $id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'CNI' => $request->CNI,
            'll_com' => $request->ll_com,
            'NOM_ETABL' => $request->NOM_ETABL,
            'phone' => $request->phone,
            'content' => $request->content,
            'adressIp'=>$ip,
            'mac_address'=>$macAddress,
           'status'=>0,
        ]);
        $this->uploadImage($request, $rec->id);

        return redirect('/visiteur/reclamation')->with([
            'type' => 'success',
            'message' => 'reclamation ajouter avec succès',
        ]);
    }  

}
