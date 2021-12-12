<?php

namespace App\Models;

use App\Models\Competence;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    public function competences()
    {
        return $this->belongsToMany(Competence::class)->withTimestamps();
    }
}
