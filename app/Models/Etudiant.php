<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function notes() {
        return $this->hasMany(Note::class);
    }
    public function niveau() {
        return $this->belongsTo(App\models\Niveau::class);
    }
    public function module() {
        return $this->belongsToMany(App\models\Modules::class);
    }

    public function marks() {
        return $this->hasMany(Note::class,'etudiant_id');
    }
}
