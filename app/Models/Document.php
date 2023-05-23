<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $table = 'documents';
    protected $fillable = ['reclamation_id', 'path', 'name'];
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function event()
    {
        return $this->belongsTo(Reclamation::class);
    }
}
