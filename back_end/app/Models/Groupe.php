<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AnnéeFormation;
use App\Models\Apprenant;

class Groupe extends Model
{
    use HasFactory;

    public function anéeFormation()
    {
        return $this->belongsTo(AnnéeFormation::class);
    }

    public function apprenant()
    {
        return $this->hasMany(Apprenant::class);
    }
}
