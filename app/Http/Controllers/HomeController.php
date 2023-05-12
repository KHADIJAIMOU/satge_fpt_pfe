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
    public function indexinformationupdate()
    {
        return view('home.vip.informationprofil');
    }

    public function indexchangePasswordUpdate()
    {
        return view('home.vip.changepassword');
    }

    public function indexRegime()
    {
        return view('home.vip.regimeinfo');
    }
    public function indexComplementAlimentaire()
    {
        return view('home.vip.complementalimentaire');
    }
    public function indexMaigrir()
    {
        return view('home.vip.maigrir');
    }
    public function indexRecette()
    {
        return view('home.vip.recette');
    }

    public function indexFamilleDeNutrition()
    {
        return view('home.vip.familledenutrition');
    }
    public function profileUpdate(Request $request)
    {
        //validation rules

        $request->validate([
            'name' => 'required|min:4|string|max:255',
            'email' => 'string|email|max:255',
        ]);
        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
        return back()->with('message', 'Profile modifié ');
    }
    public function changePasswordUpdate(Request $request)
    {
        if (!Hash::check($request->get('current_password'), Auth::user()->password)) {
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
        $user->password = bcrypt($request->get('new_password'));
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
    /**
     * Autonomie function
     */
    public function anatomie()
    {
        return view('home/anatomie');
    }

    /**
     * progressdetails function
     */
    public function indexCalorieCalculator()
    {
        return view('home.vip.caloriecalculator');
    }
    public function indexProgressList()
    {
        $user_id = Auth::user()->id;
        $progress_lists = Progress::where('users_id', $user_id)->paginate(3);
        return view('home.vip.progress_list', compact('progress_lists'));
    }
    public function storeProgressList(Request $request, $id)
    {
        $id = User::find($request->users_id);
        $weight = $request->weight;

        $this->addProgressList($request, $weight);

        return redirect('/vip/progress_list')->with([
            'type' => 'success',
            'message' => 'progress list     créée avec succès ',
        ]);
    }

    public function destroyProgressList($id)
    {
        Progress::find($id)->delete();

        return redirect('/vip/progress_list')->with([
            'type' => 'success',
            'message' => 'progress list  supprimée avec succès',
        ]);
    }

    public function progressdetails($id)
    {
        $current_weight = 0;
        $progress_step = 0;
        $restTobegin = 0;
        $weeks = [];
        $progress = Progress::find($id);
        $progress_objectif = $progress->objectif;
        $status_string = $this->getStatus($progress->status);
        $current = Week::where('progress_id', $id)
            ->latest()
            ->first();
        if ($current) {
            $current_weight = $current->weight;
            if ($progress->type_diet == 'over') {
                $progress_step = ($current_weight * 100) / $progress->objectif;
            } else {
                $objectif_loss_progress = $progress->weight - $progress->objectif;
                $advance_progress = $objectif_loss_progress - ($current_weight - $progress->objectif);
                $progress_step = ($advance_progress * 100) / $objectif_loss_progress;
            }
            if ($progress_step > 100) {
                //rest to begin a new progress
                $restTobegin = round($current_weight - $progress->objectif, 2);
                $progress_step = 100;
            } elseif ($progress_step < 0) {
                //rest to begin a new progress
                $restTobegin = round($progress->objectif - $current_weight, 2);
                $progress_step = 0;
            }
            $restTobegin = abs($restTobegin);
            $progress_step = round($progress_step, 2);

            // dd($progress_step);
            $weeks = Week::where('progress_id', $id)->get(['weight']);
            $this->updateStatus($progress_step, $id);
        }

        return view('home.vip.progressdetails', compact('progress', 'progress_step', 'current_weight', 'progress_objectif', 'status_string', 'weeks', 'restTobegin'));
    }
    /// /// ////
    public function saveNewWeek(Request $request)
    {
        $progress = Progress::find($request->progress_id);
        $progress_obj = $progress->objectif;
        $rest = $request->C_weight - $progress_obj;
        week::create([
            'progress_id' => $request->progress_id,
            'weight' => $request->C_weight,
            'rest' => $rest,
        ]);
        return redirect('progressdetails/' . $request->progress_id);
    }
    public function index()
    {
        return view('home.layout');
    }
    ////
    // private function getPercent($progress_id){
    //     $progress_objectif = $progress->objectif;
    //     $current_weight = Week::where("progress_id", $id)->latest()->first()->weight;
    //     if ($progress->type_diet == "over") {
    //         $progress_step = ($current_weight * 100) / $progress->objectif;
    //     } else {
    //         $objectif_loss_progress = $progress->weight - $progress->objectif;
    //         $advance_progress = $current_weight - $progress->objectif;
    //         $progress_step = ($advance_progress * 100) / $objectif_loss_progress;
    //     }
    //     if ($progress_step > 100) {
    //         $progress_step = 100;
    //     }
    //     $progress_step = round($progress_step, 2);
    // }

    ////
    private function getStatus($num)
    {
        switch ($num) {
            case 0:
                return 'Pas assez';
                break;
            case 1:
                return 'En cours';
                break;
            case 2:
                return 'Objectif atteint';
                break;
            default:
                return 'error number';
                break;
        }
    }
    ////
    private function updateStatus($progress_step, $progress_id)
    {
        if ($progress_step < 50) {
            Progress::find($progress_id)->update([
                'status' => 0,
            ]);
        } elseif ($progress_step > 50 && $progress_step < 100) {
            Progress::find($progress_id)->update([
                'status' => 1,
            ]);
        } elseif ($progress_step >= 100) {
            Progress::find($progress_id)->update([
                'status' => 2,
            ]);
        }
    }
    private function addProgressList($request, $weight)
    {
        if ($weight < 50 && $weight >= 0) {
            Progress::create([
                'users_id' => $request->users_id,
                'title' => $request->title,
                'weight' => $request->weight,
                'objectif' => $request->objectif,
                'type_diet' => $request->type_diet,
                'status' => 0,
            ]);
        } elseif ($weight > 50) {
            Progress::create([
                'users_id' => $request->users_id,
                'title' => $request->title,
                'weight' => $request->weight,
                'objectif' => $request->objectif,
                'type_diet' => $request->type_diet,
                'status' => 1,
            ]);
        } else {
            Progress::create([
                'users_id' => $request->users_id,
                'title' => $request->title,
                'weight' => $request->weight,
                'objectif' => $request->objectif,
                'type_diet' => $request->type_diet,
                'status' => 2,
            ]);
        }
    }

    /**
     * get statistics function
     */
    //     public function getstatis()
    //     {
    //         $vip_users = User::where('type_user', 'Vip')
    //             ->count();

    //         $products = Product::count();


    //         $progress = Progress::count();
    //     }}
    }