<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{   use HandlesAuthorization;
    public function talkTo (User $user, User $to){
        return $user->id !== $to->id;
    //     if (auth()->user()->role === 'admin') {
    //         return $user->id !== $to->id;
        
    // } 
    // else {
    //     if ($user->role === 'user' && $to->role === 'admin') {
    //         return $user->id !== $to->id;
    //     }
    //     return false;
    // }
    }
}
