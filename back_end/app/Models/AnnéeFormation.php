<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Groupe;

class AnnéeFormation extends Model
{
    use HasFactory;

    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }
}
