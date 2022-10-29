<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;
    public function etudiant() {
        return $this->hasMany(App\Models\Etudiant::class);
    }
}
