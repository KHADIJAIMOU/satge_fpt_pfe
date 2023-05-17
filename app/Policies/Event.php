<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'content', 'date', 'description', 'short_description'];
    public function images()
    {
        return $this->hasMany(Image::class);
    }
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
