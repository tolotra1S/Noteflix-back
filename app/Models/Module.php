<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Note;

class Module extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function note() {
        return $this->hasMany(Note::class);
    }
    public function Niveau() {
        return $this->belongsTo(App\Models\Niveau::class);
    }
    //relation mark 
    public function marks () 
    {
        return $this->hasMany(Note::class,'module_id');
    }
}

