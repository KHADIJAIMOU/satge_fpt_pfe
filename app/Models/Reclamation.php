<?php


namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasFactory;

    protected $table = 'reclamation';
    protected $primaryKey = 'id';

    protected $fillable = [
        'users_id',
        'first_name',
            'last_name', 
            'CNI', 
            'll_com', 
            'NOM_ETABL', 
            'phone', 
            'content', 
            'adressIp', 
            'mac_address','status','response'
    ];
    public function documents()
    {
        return $this->hasMany(Document::class);
    }
    public function getStatus($num)
    {
        switch ($num) {
           
            case 0:
                return "En cours";
                break;
            case 1:
                return "Accepter";
                break;
            default:
                return "Refuser";
                break;
        }
    }
    
}
