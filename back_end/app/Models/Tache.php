<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Apprenant;

class Tache extends Model
{
    use HasFactory;

    public function apprenant()
    {
        return $this->belongsTo(Apprenant::class);
    }
}
