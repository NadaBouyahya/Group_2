<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Apprenant;
use App\Models\Tache;

class Brief extends Model
{
    use HasFactory;

    public function apprenant()
    {
        return $this->belongsTo(Apprenant::class);
    }

    public function tach()
    {
        return $this->hasMany(Tache::class);
    }
}
