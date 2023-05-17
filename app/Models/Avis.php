<?php


namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Avis  extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasFactory;

    protected $table = 'avis';
    protected $primaryKey = 'id';

    protected $fillable = [
        'users_id',
        'objet',
        'type',
        'detail',
        'adressIp',
        'mac_address',
    ];
    public function getStatus($num)
    {
        switch ($num) {
            case 0:
                return "Pas assez";
                break;
            case 1:
                return "En cours";
                break;
            case 2:
                return "Done";
                break;
            default:
                return "Objectif atteint";
                break;
        }
    }
    
}
