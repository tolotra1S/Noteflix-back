<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    use HasFactory;
    protected $guarded = [];
    //protected $fillable = ['nom_module', 'code', 'ue', 'coeff', 'niveau_id'];
    
    public function module() {
        return $this->hasMany(Note::class);
    }
    public function Niveau() {
        return $this->belongsTo(App\Models\Niveau::class);
    }
}
