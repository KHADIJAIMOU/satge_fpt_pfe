<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $fillable = ['event_id', 'path', 'name'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
