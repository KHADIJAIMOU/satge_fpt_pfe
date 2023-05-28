<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class infoAuth extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'infoAuth';
    protected $primaryKey = 'id';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'users_id',
        'adressIp',
        'mac_address',

    ];
    public function hasRole(string $role): bool
    {
        return $this->getAttribute('role') === $role;
    }


}
